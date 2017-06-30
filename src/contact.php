<?php
    class Contact
    {
        private $first_name;
        private $last_name;
        private $phone;
        private $address;
        private $email;

        function __construct ($first_name, $last_name, $phone, $address, $email)

        {
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->phone = $phone;
            $this->address = $address;
            $this->email = $email;
        }

    }


 ?>
