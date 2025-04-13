<?php

namespace app\controllers;

use app\models\Catalog;
use app\models\Otziv;
use app\models\SignupForm;
use app\models\Zayvka;
use Yii;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\web\UploadedFile;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [

            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout', 'zayvka'],
                'rules' => [
                    [
                        'actions' => ['zayvka'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['admin'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            if(Yii::$app->user->identity->isAdmin()) {
                return $this->redirect(['/admin/catalog']);
            }
            return $this->redirect(['/site/catalog']);
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $email = 'oleg20182545@mail.ru'; // Замените на адрес получателя
        $subject = 'Тема вашего письма';
        $body = 'Содержимое вашего письма';

        Yii::$app->mailer->compose()
            ->setFrom(['oleg20182545@mail.ru' => 'Олег'])
            ->setTo($email)
            ->setSubject($subject)
            ->setTextBody($body) // Используйте setHtmlBody($body) для HTML-содержимого
            ->send();

        $model = new ContactForm();
        return $this->render('contact', ['model' => $model,]);

    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionCatalog()
    {
        $model = new Catalog();

        if ($model->load(Yii::$app->request->post())) {
            $model->image = UploadedFile::getInstance($model, 'image');
                if ($model->save()) {
                    if ($model->upload()) {
                        Yii::$app->session->setFlash('success', 'Фото загружено');
                        return '';
                    }
                }
        }
        $animal = Catalog::find()->asArray()->all();
        return $this->render('catalog', ['model'=>$model, 'animal' => $animal]);
    }

    public function actionSignup()
    {

        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            return $this->redirect(['site/login']);
        }

        return $this->render('signup', ['model' => $model,]);
    }

    public function actionZayvka()
    {

        $model = new Zayvka();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->goHome();
        }

        return $this->render('zayvka', ['model' => $model,]);
    }

    public function actionOtziv()
    {
        $model = new Otziv();
        //$model->user_id=Yii::$app->user->id;
        $otz = Otziv::find()->where(['created_by' => Yii::$app->user->id])->all();
        $model->created_at = time();
        $model->updated_at = time();
        $model->updated_by = Yii::$app->user->id;
        $model->created_by = Yii::$app->user->id;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->refresh();
        }
        return $this->render('otziv', ['model'=>$model, 'otz'=>$otz]);
    }

    public function actionKarta()
    {
        return $this->render('karta');
    }

}
