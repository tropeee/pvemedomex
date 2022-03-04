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
    // echo Str::slug('AVELARDO DOMÍNGUEZ MADRID') . '<br>';
    // echo Str::slug('FERNANDO RAÚL ROMERO MENDOZA') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('ADOLFO JONATHAN SOLÍS GÓMEZ') . '<br>';
    // echo Str::slug('ESMERALDA GONZÁLEZ LAGUNA') . '<br>';
    // echo Str::slug('ELIZABETH CASTILLO ÁLVAREZ') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('MIGUEL ANGEL SALOMÓN CORTES') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('SHEILA MEDINA SANTANA') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('HECTOR SUÁREZ QUINTANA') . '<br>';
    // echo Str::slug('SILVIA VILLANUEVA ROMERO') . '<br>';
    // echo Str::slug('IRAIS MORALES ÁLVAREZ') . '<br>';
    // echo Str::slug('PATRICIA SILVA PEÑA') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('GUADALUPE IVONE ORTEGA RODRÍGUEZ') . '<br>';
    // echo Str::slug('ALFREDO EDUARDO DÍAZ LOPEZ') . '<br>';
    // echo Str::slug('EFRAÍN RODRÍGUEZ RODRÍGUEZ') . '<br>';
    // echo Str::slug('EDITH CORTÉS CASTRO') . '<br>';
    // echo Str::slug('NANCY HERRERA') . '<br>';
    // echo Str::slug('ANDRÉS GARCÍA GONZÁLEZ') . '<br>';
    // echo Str::slug('JUVENTINO VENADO CALDERÓN') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('ALEJANDRO JOSÉ GAMIÑO PALACIOS') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('RAFAEL DORANTES PAZ') . '<br>';
    // echo Str::slug('LUIS MANUEL VELASCO MUÑOZ') . '<br>';
    // echo Str::slug('LUIS CUÉLLAR ALBARRAN') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('ADOLFO SORIANO CARMONA') . '<br>';
    // echo Str::slug('SUSANA JACKQUELINE NAVARRETE SÁNCHEZ') . '<br>';
    // echo Str::slug('ALFONSO RODRÍGUEZ BAUTISTA') . '<br>';
    // echo Str::slug('CARLOS SÁNCHEZ RAMIREZ') . '<br>';
    // echo Str::slug('CARLOS RODRIGO ROCA PETRICIOLI') . '<br>';
    // echo Str::slug('CAROLINA FLORES CAMPOS') . '<br>';
    // echo Str::slug('ARMANDO CORONA ARVIZU') . '<br>';
    // echo Str::slug('LEVI EDUARDO MILLÁN GUADARRAMA') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('OSIEL ALMAZÁN') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('CARLOS ALBERTO LÓPEZ IMM') . '<br>';
    // echo Str::slug('IRMA ROSAS GUERRERO') . '<br>';
    // echo Str::slug('REYNA VICTORIA QUIRINO') . '<br>';
    // echo Str::slug('ALIBETH NAVA ÁLVAREZ') . '<br>';
    // echo Str::slug('RAUSEL CERVANTES HUERTA') . '<br>';
    // echo Str::slug('JOSÉ JUAN CALVO FERNÁNDEZ') . '<br>';
    // echo Str::slug('ROMÁN RICO GONZÁLEZ') . '<br>';
    // echo Str::slug('MARCO ANTONIO ALDAMA TOVAR') . '<br>';
    // echo Str::slug('LIZBEHT BERENICE MOTA GALVÁN') . '<br>';
    // echo Str::slug('JUAN ANTONIO MENDOZA PEDROZA') . '<br>';
    // echo Str::slug('JUAN HUMBERTO PÉREZ VEGA') . '<br>';
    // echo Str::slug('JAIME ISRAEL TREJO ROJAS') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('FELIPE ROSALES') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('NANCY MARINE PÉREZ MONDRAGÓN') . '<br>';
    // echo Str::slug('MARCELINO VELÁZQUEZ CANO') . '<br>';
    // echo Str::slug('ITZEL CORREA') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('SAMUEL VERDEJA RUIZ') . '<br>';
    // echo Str::slug('LUIS ANGEL CASTAÑEDA PEÑA') . '<br>';
    // echo Str::slug('SILVESTRE VICUÑA CORTES') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('JOSEFINA ROJAS SÁNCHEZ') . '<br>';
    // echo Str::slug('MARGARITA RUEDA') . '<br>';
    // echo Str::slug('JAVIER GARCÍA POLO') . '<br>';
    // echo Str::slug('AUREA LORENA SÁNCHEZ RODRÍGUEZ') . '<br>';
    // echo Str::slug('LORENZO CARRILLO LÓPEZ') . '<br>';
    // echo Str::slug('JAIME TORRES MARIN') . '<br>';
    // echo Str::slug('MIGUEL ÁNGEL BASTIDA SOTO') . '<br>';
    // echo Str::slug('SANTOS MUÑOZ CRUZ') . '<br>';
    // echo Str::slug('LUIS MONTES DE OCA VAZQUEZ') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('ROCIO VELÁZQUEZ MATIAS') . '<br>';
    // echo Str::slug('ANAI CRUZ BADILLO') . '<br>';
    // echo Str::slug('JOSÉ ALBERTO MEJÍA SANTAOLALLA') . '<br>';
    // echo Str::slug('FERNANDO DOMÍNGUEZ AVENDAÑO') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('JOSÉ GUADALUPE GÓMEZ HERNÁNDEZ') . '<br>';
    // echo Str::slug('MIGUEL ÁNGEL SÁNCHEZ GONZÁLEZ') . '<br>';
    // echo Str::slug('JOSE RAMON REYES RIVERA') . '<br>';
    // echo Str::slug('SILVIA LÓPEZ JARAMILLO') . '<br>';
    // echo Str::slug('EFRAÍN HECTOR VICTORIA FABIAN') . '<br>';
    // echo Str::slug('JESUS HERRERA BRAVO') . '<br>';
    // echo Str::slug('ROBERTO AVILA VENTURA') . '<br>';
    // echo Str::slug('MARIA DEL CARMEN SOTO GARDUÑO') . '<br>';
    // echo Str::slug('JULIO HORACIO MELCHOR FRANCO') . '<br>';
    // echo Str::slug('MARIBEL FLORES') . '<br>';
    // echo Str::slug('PERLA DELGADILLO SOLORIO') . '<br>';
    // echo Str::slug('AGUSTIN MARTÍNEZ FLORES') . '<br>';
    // echo Str::slug('JOSÉ ABRAHAM ZUPPA BARAJAS') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('NIEVES ESTHER ÁLVAREZ LOPEZ') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('JESÚS MARTÍN CUANALO ARAUJO') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('JOSÉ ISMAEL GARDUÑO MEJÍA') . '<br>';
    // echo Str::slug('MARI VILLEGAS') . '<br>';
    // echo Str::slug('DELFINA VÁZQUEZ DAVILA') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('ADRIANA CLAUDIA LÓPEZ FLORES') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('SANDRA IVETE TÉLLEZ ZARZA') . '<br>';
    // echo Str::slug('JUAN FELIPE LÓPEZ CALLEJAS') . '<br>';
    // echo Str::slug('OSCAR NUÑEZ LÓPEZ') . '<br>';
    // echo Str::slug('JAVIER RODOLFO ESPINOZA HERRERA') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('ERNESTO VALLE TORRES') . '<br>';
    // echo Str::slug('CARLOS ROGEL GUADARRAMA') . '<br>';
    // echo Str::slug('NICOLÁS LAUREANO ESCAMILLA') . '<br>';
    // echo Str::slug('EFREN ORDOÑEZ MENDOZA') . '<br>';
    // echo Str::slug('EDUARDO BERNAL BARÓN') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('BITIA ELIZABETH AVILÉS PÉREZ') . '<br>';
    // echo Str::slug('JULIÁN HUERTA CANTINCA') . '<br>';
    // echo Str::slug('ANA DEL CARMEN MÉRIDA ROJAS') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('MARIA GUADALUPE BOLAÑOS HERNANDEZ') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('LUIS ALBERTO CARBALLO GUTIÉRREZ') . '<br>';
    // echo Str::slug('ROSARIO PADILLA LÓPEZ') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('RODRIGO ORIHUELA RIVAS') . '<br>';
    // echo Str::slug('ISAIAS PELÁEZ SORIA') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('NANCY NAYELI GARDUÑO CRUZ') . '<br>';
    // echo Str::slug('JUAN ANTONIO PRECIADO') . '<br>';
    // echo Str::slug('CHRISTIAN IVÁN PADILLA COPCA') . '<br>';
    // echo Str::slug('RENÉ FIGUEROA LÓPEZ') . '<br>';
    // echo Str::slug('MARIA LUISA MENDOZA MONDRAGÓN') . '<br>';
    // echo Str::slug('DORA ELENA REAL SALINAS') . '<br>';
    // echo Str::slug('GONZALO ALARCÓN BARCENA') . '<br>';
    // echo Str::slug('LUIS ALBERTO GUTIÉRREZ SABBAGH') . '<br>';
    // echo Str::slug('FRANCISCO NÚÑEZ') . '<br>';
    // echo Str::slug('EDELMIRA GUTIÉRREZ RIOS') . '<br>';
    // echo Str::slug('JUAN MANUEL LÓPEZ ADAN') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('DANIEL JAVIER VOLBRE MORA') . '<br>';
    // echo Str::slug('KAREN DIANA ALCÁNTARA') . '<br>';
    // echo Str::slug('OSCIEL SALCEDO') . '<br>';
    // echo Str::slug('ZITLALI CONCEPCIÓN SERRATO JIMÉNEZ') . '<br>';
    // echo Str::slug('MÓNICA CONTRERAS ÁLVAREZ') . '<br>';
    // echo Str::slug('ANA GABRIELA PÉREZ GALVÁN') . '<br>';
    // echo Str::slug('MARIO AGUILAR GUTIÉRREZ') . '<br>';
    // echo Str::slug('JOSÉ LUIS DURÁN REVELES') . '<br>';
    // echo Str::slug('ADRIAN FERNÁNDEZ JIMÉNEZ') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('VICTOR ARMENTA LANDA ') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('HUGO NAVA SOTO') . '<br>';
    // echo Str::slug('OMAR JAIR GARDUÑO MONTALVO') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('ENRIQUE JHOVANY MORELOS ROSAS') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('HEBER SIMEI MATIAS GONZÁLEZ') . '<br>';
    // echo Str::slug('LUIS ANTONIO TORRES SÁNCHEZ') . '<br>';
    // echo Str::slug('JAFET MANUEL SAINZ VILLARREAL') . '<br>';
    // echo Str::slug('JOSÉ JELIN BENITES GARCÍA') . '<br>';
    // echo Str::slug('FERNANDO JASSO IÑIGUEZ') . '<br>';
    // echo Str::slug('RAFAEL OSORNIO SÁNCHEZ') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('ALI SAYURI NÚÑEZ MENESES') . '<br>';
    // echo Str::slug('ERIKA VIANEY LÓPEZ MORENO') . '<br>';
    // echo Str::slug('MAURICIO BARCENAS CEDILLO') . '<br>';
    // echo Str::slug('ERIC RAMÍREZ ORTIZ') . '<br>';
    // echo Str::slug('HECTOR FRIAS PÉREZ') . '<br>';
    // echo Str::slug('NANCY ANGÉLICA SANABRIA AYALA') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('MARCO ANTONIO JUÁREZ COLORADO') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('MARICRUZ GARCÍA RAMÍREZ') . '<br>';
    // echo Str::slug('LUCIA PAOLA SAGNELLI LÓPEZ') . '<br>';
    // echo Str::slug('NORA MARGARITA SANTILLAN MARTÍNEZ') . '<br>';
    // echo Str::slug('JOSÉ CUAUHTEMOC GARCÍA ORTEGA') . '<br>';
    // echo Str::slug('MAURICIO SILVA ADAYA') . '<br>';
    // echo Str::slug('HERSSAEL LÓPEZ GARCÍA') . '<br>';
    // echo Str::slug('CARITINA SAÉNZ VARGAS') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('MONSERRAT YOLOTZIN MANCERA MARTÍNEZ') . '<br>';
    // echo Str::slug('ERNESTO MONROY YURRIETA') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('ADRIAN REYES OROPEZA') . '<br>';
    // echo Str::slug('EMMA GLORIA AMBROSIO VILLASEÑOR') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('HUGO MURILLO RAMÍREZ') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('JUAN JOSÉ LINO MORENO') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('YOLANDA TOLEDO MONDRAGÓN') . '<br>';
    // echo Str::slug('NATALIA LÓPEZ VÁZQUEZ') . '<br>';
    // echo Str::slug('NORMA ELVIA MÉNDEZ ESPEJEL') . '<br>';
    // echo Str::slug('0') . '<br>';
    // echo Str::slug('ERIC CONZUELO GONZÁLEZ') . '<br>';
    // echo Str::slug('LORENA ALCÁNTARA') . '<br>';
    echo Str::slug('Erika Vianey López Moreno ') . '<br>';
echo Str::slug('Maricruz García Ramírez ') . '<br>';
echo Str::slug('Lucia Paola Sagnelli López') . '<br>';
echo Str::slug('Ernesto Hector Monroy Yurrieta ') . '<br>';
echo Str::slug('MARCO ANTONIO JUAREZ COLORADO ') . '<br>';
echo Str::slug('José Luis Romero Ordoñez ') . '<br>';
echo Str::slug('Adrián Reyes Oropeza') . '<br>';
echo Str::slug('Natalia López vazquez ') . '<br>';
echo Str::slug('Maricruz García Ramírez') . '<br>';
echo Str::slug('JUAN JOSE LINO MORENO') . '<br>';
echo Str::slug('Héctor frías perez ') . '<br>';
echo Str::slug('Hugo Murillo Ramírez') . '<br>';
echo Str::slug('José Luis Romero Ordóñez ') . '<br>';
echo Str::slug('Ali Sayuri Núñez Meneses ') . '<br>';
echo Str::slug('Yolando Toledo Mondragon ') . '<br>';

    }
}
