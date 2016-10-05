<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Signup; //include model Signup.php
use app\models\Login; //include model Login.php
//use app\models\LoginForm;
//use app\models\ContactForm;

class UserController extends Controller  //or - \yii\web\Controller
{

    /**
     * @return
    */
    public function actionIndex() {
        return $this->render('index');
    } //__/public function actionIndex()


    /** ACTION REGISTRATION USER
     * @return
    */
    public function actionSignup() {  //if( isset($_POST['Signup']) ){ var_dump($_POST['Signup']);die; } - testing
        $signup_model = new Signup();

        if( isset($_POST['Signup']) ){  //or Yii::$app->request->post('Signup')
            //вызываем компонент request,в кот.хранятся результ.запроса $_POST,где есть массив $Signup,сформированный при отправке данных из формы регистрации в /views/user/signup.php
            $signup_model->attributes = Yii::$app->request->post('Signup');  //в $model->attributes ложим данные из $_POST['Signup']
            /*это все равно что написать:
                    $signup_model->username = $_POST['Signup']['username'];
                    $signup_model->email = $_POST['Signup']['email'];
                    $signup_model->password = $_POST['Signup']['password']; */

            /*проверит с-ва $username,$email и $password,при их заполнении данными,на все правила валидации,описанные в модели Signup и вернет true/false*/
            if ($signup_model->validate()) {  //if data is validate - login User in DB & redirect to Home page
                $signup_model->signup();  //save new User to DB
                Yii::$app->session->setFlash('success_signup', 'You have successfully signed up!'); //write in session a message,that will be output in main.php
                return $this->goHome();  //redirect to Home page
            }
        }
        /* or this вместо всего того,что выше
        if( $signup_model->load( Yii::$app->request->post() ) && $signup_model->validate() && $signup_model->rules() ) {
            $signup_model->signup();
            return $this->goHome();
        }
        */

        return $this->render('signup', ['signup_model'=>$signup_model]); //return $this->render('signup'); - testing

    } //__/public function actionSignup()



    /** ACTION LOGINATION USER
     * @return
    */
    public function actionLogin() {  //if( isset($_POST['Login']) ){ var_dump($_POST['Login']);die; } - testing
        if( !Yii::$app->user->isGuest ): return $this->goHome(); endif; //if user is not guest(user is logined) - redirect to Home page

        $login_model = new Login();

        if( isset($_POST['Login']) ){ //or Yii::$app->request->post('Login')
            //var_dump($_POST['Login']);die;
            //вызываем компонент request,в кот.хранятся результ.запроса $_POST,где есть массив $Login,сформированный при отправке данных из формы Логинации(авторизации) в /views/user/login.php
            $login_model->attributes = Yii::$app->request->post('Login');  //в $login_model->attributes ложим данные из $_POST['Login']
            /*это все равно что написать:
                    $login_model->email = $_POST['Login']['email'];
                    $login_model->password = $_POST['Login']['password']; */

            /*проверит с-ва $email и $password,при их заполнении данными,на все правила валидации,описанные в модели Signup и вернет true/false*/
            if ($login_model->validate()) {  //if data is validate
                //var_dump('Success!');die();
                Yii::$app->user->login( $login_model->getUser() );
                Yii::$app->session->setFlash('success_login', 'Welcome to site '); //write in session a message,that will be output in main.php
                return $this->goHome();  //redirect to Home page
            }
        }
        /* or this вместо всего того,что выше
        if( $login_model->load( Yii::$app->request->post() ) && $login_model->validate() && $login_model->rules() ) {
            $login_model->#####();
            return $this->goHome();
        }
        */

        return $this->render('login', ['login_model'=>$login_model]); //return $this->render('login'); - testing
    }


    /** ACTION LOGOUT USER
     * @return
   */
    public function actionLogout() {
        //if(Yii::$app->user->isGuest){
            Yii::$app->user->logout();
            //return $this->redirect('login');  //redirect to login form page
            return $this->goHome(); //redirect to Home page
       // }
    }



} //__/class UsersController


