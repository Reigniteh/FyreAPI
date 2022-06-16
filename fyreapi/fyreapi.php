<?php

/**
* FyreAPI PHP implementation with premade classes & functions
* @author Reigniteh
* @copyright (c) 2022, Toth Matyas
* @version 1.0
* @link https://github.com/Reigniteh/FyreAPI
* Latest Update: 2022. 06. 16.
*
**/



class FyreMC {

    const BASE = "https://fyremc.hu";
    const ACCOUNT = "https://account.fyremc.hu";

}



class Endpoint {

    const PLAYER_API = FyreMC::ACCOUNT."/api/player/";
    const GUILD_API = FyreMC::ACCOUNT."/api/guild/";

}



class Player {

    private $player_data_url;
    private $raw_json;

    public function __construct($username) {

        $this->player_data_url = Endpoint::PLAYER_API.''.$username;

    }

}

?>