<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Proposal;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Mail\CandidateContact;
use App\Models\Secretary;
use Illuminate\Support\Facades\Mail;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $candidatos = Candidate::inRandomOrder()->get();

        return view('candidatos.candidatos', compact('candidatos'));
    }

    

    /**
     * Display the specified resource.
     *
     * @param  String $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $redes = 0;
        $col = 0;
        $candidate = Candidate::where('slug',$slug)->firstOrFail();

        if($candidate->sexo == 'm'){
            $candidate['sexo'] = 'Candidato';
        }else if($candidate->sexo == 'f'){
            $candidate['sexo'] = 'Candidata';
        }
        if(($candidate->facebook) != null){
            $redes = $redes+1;
        }
        if(($candidate->twitter) != null){
            $redes = $redes+1;
        }
        if(($candidate->instagram) != null){
            $redes = $redes+1;
        }
        if(($candidate->whatsapp) != null){
            $redes = $redes+1;
        }

        switch ($redes) {
            case 1:
                $col = 12;
                break;
            case 2:
                $col = 6;
                break;
            case 3:
                $col = 4;
                break;
            case 4:
                $col = 3;
                break;
            default:
                break;
        }

        return view('candidatos.candidato', compact('candidate', 'col'));
    }

    public function showsecre($slug)
    {
        $redes = 0;
        $col = 0;
        $secretario = Secretary::where('slug',$slug)->firstOrFail();

        if($secretario->sexo == 'm'){
            $secretario['sexo'] = 'Secretario';
        }else if($secretario->sexo == 'f'){
            $secretario['sexo'] = 'Secretaria';
        }
        if(($secretario->facebook) != null){
            $redes = $redes+1;
        }
        if(($secretario->twitter) != null){
            $redes = $redes+1;
        }
        if(($secretario->instagram) != null){
            $redes = $redes+1;
        }
        if(($secretario->whatsapp) != null){
            $redes = $redes+1;
        }

        switch ($redes) {
            case 1:
                $col = 12;
                break;
            case 2:
                $col = 6;
                break;
            case 3:
                $col = 4;
                break;
            case 4:
                $col = 3;
                break;
            default:
                break;
        }

        return view('candidatos.secretario', compact('secretario', 'col'));
    }
    
    public function showsecretarios($slug)
    {
        $redes = 0;
        $col = 0;
        $secretario = Candidate::where('slug',$slug)->firstOrFail();

        if($secretario->sexo == 'm'){
            $secretario['sexo'] = '';
        }else if($secretario->sexo == 'f'){
            $secretario['sexo'] = '';
        }
        if(($secretario->facebook) != null){
            $redes = $redes+1;
        }
        if(($secretario->twitter) != null){
            $redes = $redes+1;
        }
        if(($secretario->instagram) != null){
            $redes = $redes+1;
        }
        if(($secretario->whatsapp) != null){
            $redes = $redes+1;
        }

        switch ($redes) {
            case 1:
                $col = 12;
                break;
            case 2:
                $col = 6;
                break;
            case 3:
                $col = 4;
                break;
            case 4:
                $col = 3;
                break;
            default:
                break;
        }
    }
    
    public function secretarios()
    {
        $secretario = Secretary::all();
        
        return view('estructura', compact('secretario'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidate $candidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidate $candidate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidate $candidate)
    {
        //
    }

    public function test()
    {
    // echo Str::slug('SABINO GUADARRAMA') . '<br>';
    // echo Str::slug('AVELARDO DOM??NGUEZ MADRID') . '<br>';
    // echo Str::slug('FERNANDO RA??L ROMERO MENDOZA') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('ADOLFO JONATHAN SOL??S G??MEZ') . '<br>';
    // echo Str::slug('ESMERALDA GONZ??LEZ LAGUNA') . '<br>';
    // echo Str::slug('ELIZABETH CASTILLO ??LVAREZ') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('MIGUEL ANGEL SALOM??N CORTES') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('SHEILA MEDINA SANTANA') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('HECTOR SU??REZ QUINTANA') . '<br>';
    // echo Str::slug('SILVIA VILLANUEVA ROMERO') . '<br>';
    // echo Str::slug('IRAIS MORALES ??LVAREZ') . '<br>';
    // echo Str::slug('PATRICIA SILVA PE??A') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('GUADALUPE IVONE ORTEGA RODR??GUEZ') . '<br>';
    // echo Str::slug('ALFREDO EDUARDO D??AZ LOPEZ') . '<br>';
    // echo Str::slug('EFRA??N RODR??GUEZ RODR??GUEZ') . '<br>';
    // echo Str::slug('EDITH CORT??S CASTRO') . '<br>';
    // echo Str::slug('NANCY HERRERA') . '<br>';
    // echo Str::slug('ANDR??S GARC??A GONZ??LEZ') . '<br>';
    // echo Str::slug('JUVENTINO VENADO CALDER??N') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('ALEJANDRO JOS?? GAMI??O PALACIOS') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('RAFAEL DORANTES PAZ') . '<br>';
    // echo Str::slug('LUIS MANUEL VELASCO MU??OZ') . '<br>';
    // echo Str::slug('LUIS CU??LLAR ALBARRAN') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('ADOLFO SORIANO CARMONA') . '<br>';
    // echo Str::slug('SUSANA JACKQUELINE NAVARRETE S??NCHEZ') . '<br>';
    // echo Str::slug('ALFONSO RODR??GUEZ BAUTISTA') . '<br>';
    // echo Str::slug('CARLOS S??NCHEZ RAMIREZ') . '<br>';
    // echo Str::slug('CARLOS RODRIGO ROCA PETRICIOLI') . '<br>';
    // echo Str::slug('CAROLINA FLORES CAMPOS') . '<br>';
    // echo Str::slug('ARMANDO CORONA ARVIZU') . '<br>';
    // echo Str::slug('LEVI EDUARDO MILL??N GUADARRAMA') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('OSIEL ALMAZ??N') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('CARLOS ALBERTO L??PEZ IMM') . '<br>';
    // echo Str::slug('IRMA ROSAS GUERRERO') . '<br>';
    // echo Str::slug('REYNA VICTORIA QUIRINO') . '<br>';
    // echo Str::slug('ALIBETH NAVA ??LVAREZ') . '<br>';
    // echo Str::slug('RAUSEL CERVANTES HUERTA') . '<br>';
    // echo Str::slug('JOS?? JUAN CALVO FERN??NDEZ') . '<br>';
    // echo Str::slug('ROM??N RICO GONZ??LEZ') . '<br>';
    // echo Str::slug('MARCO ANTONIO ALDAMA TOVAR') . '<br>';
    // echo Str::slug('LIZBEHT BERENICE MOTA GALV??N') . '<br>';
    // echo Str::slug('JUAN ANTONIO MENDOZA PEDROZA') . '<br>';
    // echo Str::slug('JUAN HUMBERTO P??REZ VEGA') . '<br>';
    // echo Str::slug('JAIME ISRAEL TREJO ROJAS') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('FELIPE ROSALES') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('NANCY MARINE P??REZ MONDRAG??N') . '<br>';
    // echo Str::slug('MARCELINO VEL??ZQUEZ CANO') . '<br>';
    // echo Str::slug('ITZEL CORREA') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('SAMUEL VERDEJA RUIZ') . '<br>';
    // echo Str::slug('LUIS ANGEL CASTA??EDA PE??A') . '<br>';
    // echo Str::slug('SILVESTRE VICU??A CORTES') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('JOSEFINA ROJAS S??NCHEZ') . '<br>';
    // echo Str::slug('MARGARITA RUEDA') . '<br>';
    // echo Str::slug('JAVIER GARC??A POLO') . '<br>';
    // echo Str::slug('AUREA LORENA S??NCHEZ RODR??GUEZ') . '<br>';
    // echo Str::slug('LORENZO CARRILLO L??PEZ') . '<br>';
    // echo Str::slug('JAIME TORRES MARIN') . '<br>';
    // echo Str::slug('MIGUEL ??NGEL BASTIDA SOTO') . '<br>';
    // echo Str::slug('SANTOS MU??OZ CRUZ') . '<br>';
    // echo Str::slug('LUIS MONTES DE OCA VAZQUEZ') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('ROCIO VEL??ZQUEZ MATIAS') . '<br>';
    // echo Str::slug('ANAI CRUZ BADILLO') . '<br>';
    // echo Str::slug('JOS?? ALBERTO MEJ??A SANTAOLALLA') . '<br>';
    // echo Str::slug('FERNANDO DOM??NGUEZ AVENDA??O') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('JOS?? GUADALUPE G??MEZ HERN??NDEZ') . '<br>';
    // echo Str::slug('MIGUEL ??NGEL S??NCHEZ GONZ??LEZ') . '<br>';
    // echo Str::slug('JOSE RAMON REYES RIVERA') . '<br>';
    // echo Str::slug('SILVIA L??PEZ JARAMILLO') . '<br>';
    // echo Str::slug('EFRA??N HECTOR VICTORIA FABIAN') . '<br>';
    // echo Str::slug('JESUS HERRERA BRAVO') . '<br>';
    // echo Str::slug('ROBERTO AVILA VENTURA') . '<br>';
    // echo Str::slug('MARIA DEL CARMEN SOTO GARDU??O') . '<br>';
    // echo Str::slug('JULIO HORACIO MELCHOR FRANCO') . '<br>';
    // echo Str::slug('MARIBEL FLORES') . '<br>';
    // echo Str::slug('PERLA DELGADILLO SOLORIO') . '<br>';
    // echo Str::slug('AGUSTIN MART??NEZ FLORES') . '<br>';
    // echo Str::slug('JOS?? ABRAHAM ZUPPA BARAJAS') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('NIEVES ESTHER ??LVAREZ LOPEZ') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('JES??S MART??N CUANALO ARAUJO') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('JOS?? ISMAEL GARDU??O MEJ??A') . '<br>';
    // echo Str::slug('MARI VILLEGAS') . '<br>';
    // echo Str::slug('DELFINA V??ZQUEZ DAVILA') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('ADRIANA CLAUDIA L??PEZ FLORES') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('SANDRA IVETE T??LLEZ ZARZA') . '<br>';
    // echo Str::slug('JUAN FELIPE L??PEZ CALLEJAS') . '<br>';
    // echo Str::slug('OSCAR NU??EZ L??PEZ') . '<br>';
    // echo Str::slug('JAVIER RODOLFO ESPINOZA HERRERA') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('ERNESTO VALLE TORRES') . '<br>';
    // echo Str::slug('CARLOS ROGEL GUADARRAMA') . '<br>';
    // echo Str::slug('NICOL??S LAUREANO ESCAMILLA') . '<br>';
    // echo Str::slug('EFREN ORDO??EZ MENDOZA') . '<br>';
    // echo Str::slug('EDUARDO BERNAL BAR??N') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('BITIA ELIZABETH AVIL??S P??REZ') . '<br>';
    // echo Str::slug('JULI??N HUERTA CANTINCA') . '<br>';
    // echo Str::slug('ANA DEL CARMEN M??RIDA ROJAS') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('MARIA GUADALUPE BOLA??OS HERNANDEZ') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('LUIS ALBERTO CARBALLO GUTI??RREZ') . '<br>';
    // echo Str::slug('ROSARIO PADILLA L??PEZ') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('RODRIGO ORIHUELA RIVAS') . '<br>';
    // echo Str::slug('ISAIAS PEL??EZ SORIA') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('NANCY NAYELI GARDU??O CRUZ') . '<br>';
    // echo Str::slug('JUAN ANTONIO PRECIADO') . '<br>';
    // echo Str::slug('CHRISTIAN IV??N PADILLA COPCA') . '<br>';
    // echo Str::slug('REN?? FIGUEROA L??PEZ') . '<br>';
    // echo Str::slug('MARIA LUISA MENDOZA MONDRAG??N') . '<br>';
    // echo Str::slug('DORA ELENA REAL SALINAS') . '<br>';
    // echo Str::slug('GONZALO ALARC??N BARCENA') . '<br>';
    // echo Str::slug('LUIS ALBERTO GUTI??RREZ SABBAGH') . '<br>';
    // echo Str::slug('FRANCISCO N????EZ') . '<br>';
    // echo Str::slug('EDELMIRA GUTI??RREZ RIOS') . '<br>';
    // echo Str::slug('JUAN MANUEL L??PEZ ADAN') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('DANIEL JAVIER VOLBRE MORA') . '<br>';
    // echo Str::slug('KAREN DIANA ALC??NTARA') . '<br>';
    // echo Str::slug('OSCIEL SALCEDO') . '<br>';
    // echo Str::slug('ZITLALI CONCEPCI??N SERRATO JIM??NEZ') . '<br>';
    // echo Str::slug('M??NICA CONTRERAS ??LVAREZ') . '<br>';
    // echo Str::slug('ANA GABRIELA P??REZ GALV??N') . '<br>';
    // echo Str::slug('MARIO AGUILAR GUTI??RREZ') . '<br>';
    // echo Str::slug('JOS?? LUIS DUR??N REVELES') . '<br>';
    // echo Str::slug('ADRIAN FERN??NDEZ JIM??NEZ') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('VICTOR ARMENTA LANDA ') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('HUGO NAVA SOTO') . '<br>';
    // echo Str::slug('OMAR JAIR GARDU??O MONTALVO') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('ENRIQUE JHOVANY MORELOS ROSAS') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('HEBER SIMEI MATIAS GONZ??LEZ') . '<br>';
    // echo Str::slug('LUIS ANTONIO TORRES S??NCHEZ') . '<br>';
    // echo Str::slug('JAFET MANUEL SAINZ VILLARREAL') . '<br>';
    // echo Str::slug('JOS?? JELIN BENITES GARC??A') . '<br>';
    // echo Str::slug('FERNANDO JASSO I??IGUEZ') . '<br>';
    // echo Str::slug('RAFAEL OSORNIO S??NCHEZ') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('ALI SAYURI N????EZ MENESES') . '<br>';
    // echo Str::slug('ERIKA VIANEY L??PEZ MORENO') . '<br>';
    // echo Str::slug('MAURICIO BARCENAS CEDILLO') . '<br>';
    // echo Str::slug('ERIC RAM??REZ ORTIZ') . '<br>';
    // echo Str::slug('HECTOR FRIAS P??REZ') . '<br>';
    // echo Str::slug('NANCY ANG??LICA SANABRIA AYALA') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('MARCO ANTONIO JU??REZ COLORADO') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('MARICRUZ GARC??A RAM??REZ') . '<br>';
    // echo Str::slug('LUCIA PAOLA SAGNELLI L??PEZ') . '<br>';
    // echo Str::slug('NORA MARGARITA SANTILLAN MART??NEZ') . '<br>';
    // echo Str::slug('JOS?? CUAUHTEMOC GARC??A ORTEGA') . '<br>';
    // echo Str::slug('MAURICIO SILVA ADAYA') . '<br>';
    // echo Str::slug('HERSSAEL L??PEZ GARC??A') . '<br>';
    // echo Str::slug('CARITINA SA??NZ VARGAS') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('MONSERRAT YOLOTZIN MANCERA MART??NEZ') . '<br>';
    // echo Str::slug('ERNESTO MONROY YURRIETA') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('ADRIAN REYES OROPEZA') . '<br>';
    // echo Str::slug('EMMA GLORIA AMBROSIO VILLASE??OR') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('HUGO MURILLO RAM??REZ') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('JUAN JOS?? LINO MORENO') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('YOLANDA TOLEDO MONDRAG??N') . '<br>';
    // echo Str::slug('NATALIA L??PEZ V??ZQUEZ') . '<br>';
    // echo Str::slug('NORMA ELVIA M??NDEZ ESPEJEL') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('ERIC CONZUELO GONZ??LEZ') . '<br>';
    // echo Str::slug('LORENA ALC??NTARA') . '<br>';
    echo Str::slug('Erika Vianey L??pez Moreno ') . '<br>';
echo Str::slug('Maricruz Garc??a Ram??rez ') . '<br>';
echo Str::slug('Lucia Paola Sagnelli L??pez') . '<br>';
echo Str::slug('Ernesto Hector Monroy Yurrieta ') . '<br>';
echo Str::slug('MARCO ANTONIO JUAREZ COLORADO ') . '<br>';
echo Str::slug('Jos?? Luis Romero Ordo??ez ') . '<br>';
echo Str::slug('Adri??n Reyes Oropeza') . '<br>';
echo Str::slug('Natalia L??pez vazquez ') . '<br>';
echo Str::slug('Maricruz Garc??a Ram??rez') . '<br>';
echo Str::slug('JUAN JOSE LINO MORENO') . '<br>';
echo Str::slug('H??ctor fr??as perez ') . '<br>';
echo Str::slug('Hugo Murillo Ram??rez') . '<br>';
echo Str::slug('Jos?? Luis Romero Ord????ez ') . '<br>';
echo Str::slug('Ali Sayuri N????ez Meneses ') . '<br>';
echo Str::slug('Yolando Toledo Mondragon ') . '<br>';

    }
}
