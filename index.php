<?php 

class Movie {
    public $title;
    public $poster;
    public $description;
    public $genre;
    public $nationality;
    public $year;
    

        function __construct($_title, $_genre, $_posterName)
        {
            $this->title = $_title;
            $this->genre = $_genre;
            $this->createPoster($_posterName);
        }

        public function createPoster($_posterName)
        {
            $this->poster = '<img src="img/' . $_posterName . '.jpg" style="width: 200px" alt="">';
        }

        public function __set($name)
        {
            throw new Exception("Cannot add new property \$$name to instance of " . __CLASS__);
        }
    }
    $batman = new Movie('batman', 'Action', 'batman');
    $batman->year = '2000';
    $batman->description = 'why so serius?';
    $fightClub = new Movie('Fight Club', 'Drama', 'fightclub');
    $fightClub->year = '2000';
    $fightClub->description = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda voluptate eaque ipsa repellendus tempore similique optio repellat aperiam nam eveniet voluptas harum';
    

    ?>

    <div >
        <div >
           
            <div >
                <h2><?php echo $batman->title ?></h2>
                <div><?php echo $batman->poster ?></div>
                <div><?php echo $batman->genre ?></div>
                <div><?php echo $batman->year ?></div>
                <div><?php echo $batman->description ?></div>
            </div>
            <div >
                <h2><?php echo $fightClub->title ?></h2>
                <div><?php echo $fightClub->poster ?></div>
                <div><?php echo $fightClub->genre ?></div>
                <div><?php echo $fightClub->year ?></div>
                <div><?php echo $fightClub->description ?></div>
            </div>
        </div>
    </div>

   
   
   
 
