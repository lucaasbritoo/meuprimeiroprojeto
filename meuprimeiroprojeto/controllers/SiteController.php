<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
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
        date_default_timezone_set('America/Sao_Paulo');
        $titulo = "Super TADS Aula YII2";
        $ano = Date("d/m/Y H:i:s");
        
        $titulo1 = "As 10 melhores pousadas ";
        $texto1 = "Brasileiro que é brasileiro adora viajar. Na maioria das vezes, o destino escolhido resume-se em praias, muito banho de mar, água de coco e uma rede sob a sombra de um coqueiro. Em matéria de turismo doméstico, o litoral brasileiro não decepciona em nada nenhum viajante de qualquer cidade do mundo que por aqui decida repousar. Só o litoral nordestino, por exemplo, oferece 3 mil quilômetros de puro deslumbre em praias e biodiversidade. Destaque para o menor litoral do país localizado no estado do Piauí, em especial as praias da cidade de Luís Correa.
Como uma joia rara da beleza e da preservação de sua natureza, Luís Correa é o município piauiense com maior extensão litorânea, são 46 km de sossego, beleza, simplicidade e elegância. Entre os mais conhecidos e procurados destinos destacam-se as praias de Atalaia, antiga vila de pescadores, a praia do Coqueiro, uma das procuradas da região para a prática de esportes como o kite surf, e a praia do Arrombado com seus bares rústicos e tranquilos. A hospitalidade do seu povo, o artesanato e a culinária regional fazem desse destino uma escolha inesquecível e surpreendente.
Luís Correa era conhecida como Vila Amarração, somente em 1935 é que o município passou a ser chamado de Luis Correa em homenagem a um ilustre morador que se tornou escritor, jornalista, promotor público, juiz federal chamado Luís de Morais Correa. Já esteve sob jurisdição do Ceará, mas em 1880 voltou a pertencer ao Estado do Piauí. Foi a primeira cidade piauiense a alforriar seus escravos. É um lugar cheio de história e curiosidades.
Preparamos para você um guia com os melhores e mais confortáveis hotéis e pousadas em Luís Correia (PI). A Cidade possui várias opções de praias e paisagens deslumbrantes para curtir, fica relativamente próxima do Delta do Parnaíba. Quando visitar a praia de Luís Correia, não deixe de conhecer o delta do Parnaíba nem Barra Grande. Todas esses hotéis e pousadas que separamos ficam perto do mar.";
        
        $titulo2 = "Festival Universitário Partilhar
Surf Party bomba em Sampa";
        $texto2 = "O ano letivo está acabando, mas já tem muito estudante com saudade de 2014. Principalmente a galera do surf universitário, que se reúne nesta sexta-feira (12/12), pra comemorar duplamente o final das provas nas salas de aula e nas ondas.
<br>
Como já é tradição, a Surf Party vem recheada de atrações e gente bonita. 
<br>
Falando em gatas, as cinco finalistas do Concurso Garota Universitária estarão na festa disputando o título de estudante mais charmosa e estilosa de São Paulo. 
<br>
É claro que a boa música também estará bombando, com a DJ Thay Girão e os DJs EB e Funky B. Destaque para o show da banda Mahalo, grande vencedora do Rock Fest Universitário, concurso que levou muito som, arte e cultura para as principais faculdades da capital.
<br>
A festa acontece a partir das 22 horas desta sexta-feira no Estúdio (antigo Estúdio Emme), na Rua Pedroso de Moraes, 1036, Pinheiros.
<br>
Quem vai tocar? DJ Thay Girão + Dj EB + Dj Funky B; Banda Mahalo = vencedores do Rock Fest Universitário?
<br>
O que mais? Desfile das finalistas do Concurso Garota Universitária 2014??
<br>
Quanto? R$ 30 para as mulheres e R$ 50 para os homens (antecipado)??. Convites limitados.??
<br>
*Na porta os valores serão alterados com a possibilidade de estarem esgotados.
        ";
        
        $titulo3 = "As melhores atrações e parques do mundo, segundo o Tripadvisor";
        $texto3 = "O Tripadvisor anuncia os vencedores da edição 2014 do prêmio Travelers’ Choice AtraçõesTM destacando os principais parques e pontos turísticos ao redor do globo. Ao todo foram identificados 929 vencedores, dividos em listas dos 25 melhores do Mundo e rankings para Ásia, Austrália, Canadá, China, Europa, Índia, México, América do Sul, Pacífico Sul,  Reino Unido e Estados Unidos.

Para o Brasil, foram elaboradas listas com os dez melhores parques e atrações: o Cristo Redentor e o Parque do Ibirapuera foram os vencedores em suas categorias – ambos também estão entre os melhores pontos turísticos e parques do mundo, respectivamente no 22ª e 8ª lugar. O levantamento mostrou ainda que o Rio de Janeiro é a terceira cidade com as atrações mais bem avaliadas em todo o mundo1, perdendo apenas para São Petersburgo, na Rússia, e Jerusalém, Israel. Nesse quesito, o Rio ficou à frente de outras importantes cidades turísticas como: Florença e Roma (Itália) e Istambul, na Turquia.

Na lista da América do Sul, dos 50 premiados, 27 ficam em território brasileiro (10 atrações e 17 parques), sendo que a cidade histórica de Machu Picchu, no Peru, figura no primeiro lugar do ranking. Todos os vencedores brasileiros (atrações e parques) estão concentrados em 13 estados :Amazonas, Bahia, Espírito Santo, Goiás, Mato Grosso do Sul, Minas Gerais, Pará, Paraná, Rio de Janeiro, Rio Grande do Norte, Rio Grande do Sul, Santa Catarina e São Paulo.";
        
        
        
        
        return $this->render('index', array(
                                          'titulo' => $titulo,
                                           'ano' => $ano,
                                           
                                           'titulo1' => $titulo1,
                                           'texto1' => $texto1,
            
                                            'titulo2' => $titulo2,
                                            'texto2' => $texto2,
            
                                            'titulo3' => $titulo3,
                                            'texto3' => $texto3,
                
                                            )
                            );
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
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
}
