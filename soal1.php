<?php
error_reporting(0);
$biodata->name = "Brilliano Dhiya Ulhaq";
$biodata->age = 18;
$biodata->address = "RT 20 RW 05 Dusun Jarakan Desa Karangsoko Kecamatan Trenggalek";
$biodata->hobbies = array("Menggambar","Mendesain Web", "Main Game");
$biodata->is_marriage = false;

class Sekolah
{
    public $nama;
    public $year_in;
    public $year_out;
    public $major;
}

$tk = new Sekolah();
$tk->nama = "TK Al Hidayah 7 Gebangan";
$tk->year_in = 2004;
$tk->year_out = 2007;
$tk->major = NULL;

$sd = new Sekolah();
$sd->nama = "SDN 1 Kelutan";
$sd->year_in = 2007;
$sd->year_out = 2013;
$sd->major = NULL;

$mts = new Sekolah();
$mts->nama = "MTsN Model Trenggalek";
$mts->year_in = 2013;
$mts->year_out = 2016;
$mts->major = NULL;

$smk = new Sekolah();
$smk->nama = "SMKN 2 Trenggalek";
$smk->year_in = 2016;
$smk->year_out = 2019;
$smk->major = NULL;

$biodata->list_school = array($tk, $sd, $mts, $smk);

class Skill
{
    public $skill_name;
    public $level;
}

$skill1 = new Skill();
$skill1->skill_name = "HTML";
$skill1->level = "Expert";

$skill2 = new Skill();
$skill2->skill_name = "PHP";
$skill2->level = "Advanced";

$skill3 = new Skill();
$skill3->skill_name = "CSS";
$skill3->level = "Advanced";

$skill4 = new SKill();
$skill4->skill_name = "MySQLi";
$skill4->level = "Advanced";

$skill5 = new Skill();
$skill5->skill_name = "Javascript";
$skill5->level = "Beginner";

$biodata->skills = array($skill1, $skill2, $skill3, $skill4, $skill5);
$biodata->interest_in_coding = true;

$returnJSON = json_encode($biodata);

echo $returnJSON;
?>