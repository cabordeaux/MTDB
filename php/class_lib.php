<?php
    class studio {
            var $name;
            function set_name ($new_name) {
                $this->name = $new_name;
            }
            function get_name () {
                return $this->name;
            }
    }

    include ("class_lib.php");

        $Sonic = new studio();
        $Soundmine = new studio;
        $Universal = new studio;

        $Sonic->set_name("Sonic Lights Studio");
        $Soundmine->set_name("Soundmine Studio");
        $Universal->set_name("Universal Studio");

        echo "Sonic's full name: " . $Sonic->get_name();
        echo "Soundmine's full name: " . $Soundmine->get_name();
        echo "Universal's full name: " . $Universal->get_name();

        


?>
