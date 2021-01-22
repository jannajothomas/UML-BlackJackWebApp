<?php

const SPADE = array(
    "A"=>"&#127137;",
    "2"=>"&#127138;",
    "3"=>"&#127139;",
    "4"=>"&#127140;",
    "5"=>"&#127141;",
    "6"=>"&#127142;",
    "7"=>"&#127143;",
    "8"=>"&#127144;",
    "9"=>"&#127145;",
    "10"=>"&#127146;",
    "J"=>"&#127147;",
    "Q"=>"&#127149;",
    "K"=>"&#127150;"
);

const HEART = array(
    "A"=>"&#127153;",
    "2"=>"&#127154;",
    "3"=>"&#127155;",
    "4"=>"&#127156;",
    "5"=>"&#127157;",
    "6"=>"&#127158;",
    "7"=>"&#127159;",
    "8"=>"&#127160;",
    "9"=>"&#127161;",
    "10"=>"&#127162;",
    "J"=>"&#127163;",
    "Q"=>"&#127165;",
    "K"=>"&#127166;"
);

const DIAMOND = array(
    "A"=>"&#127169;",
    "2"=>"&#127170;",
    "3"=>"&#127171;",
    "4"=>"&#127172;",
    "5"=>"&#127173;",
    "6"=>"&#127174;",
    "7"=>"&#127175;",
    "8"=>"&#127176;",
    "9"=>"&#127177;",
    "10"=>"&#127178;",
    "J"=>"&#127179;",
    "Q"=>"&#127181;",
    "K"=>"&#127182;"
);

const CLUB = array(
    "A"=>"&#127185;",
    "2"=>"&#127186;",
    "3"=>"&#127187;",
    "4"=>"&#127188;",
    "5"=>"&#127189;",
    "6"=>"&#127190;",
    "7"=>"&#127191;",
    "8"=>"&#127192;",
    "9"=>"&#127193;",
    "10"=>"&#127194;",
    "J"=>"&#127195;",
    "Q"=>"&#127197;",
    "K"=>"&#127198;"
);

function getUnicodeCard($card): string{
    $value = $card->getCardValue();
    $suit = $card->getCardSuit();
    switch($suit){
        case "heart":
            return((HEART[$value]));
        case "club":
            return(CLUB[$value]);
        case "spade":
            return(SPADE[$value]);
        case "diamond":
            return(DIAMOND[$value]);
        default:
            return "&#127183;";

    }
}
