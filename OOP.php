  <?php



  class Cars{
    private $model;
    private $color;
    private $year;

    public function setName($mol){
      $this->model = $mol;
    }

    public function getName(){
      return $this->model ;
    }
  }

    $toyota = new Cars();

    $toyota->setName('Vios');

    echo $toyota->getName();

  ?>
