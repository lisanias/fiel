<?php

use App\Member;
use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//
    	Member::create( [
            'id'=>169,
            'titulo'=>'PASTORA',
            'nome'=>'KÁTIA APARECIDA MARGARIDA',
            'email'=>NULL,
            'igreja'=>'ASSEMBLÉIA DE DEUS',
            'dnas'=>'1946-10-21 00:00:00',
            'naturalde'=>'TRINDADE - GO',
            'rg'=>'2636959-4302885 SSP-GO',
            'cpf'=>'380.628.501-82',
            'data_filiacao'=>'1996-12-08 00:00:00',
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>101,
            'titulo'=>'PASTOR',
            'nome'=>'ANTÔNIO CARLOS GONÇALVES BENTES',
            'email'=>NULL,
            'igreja'=>'BATISTA GETSEMANI',
            'dnas'=>'1963-12-25 00:00:00',
            'naturalde'=>'MANAUS',
            'rg'=>'244.877',
            'cpf'=>'026.096.812-91',
            'data_filiacao'=>'1992-07-26 00:00:00',
            'data_ordenacao'=>'1987-11-15 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>333,
            'titulo'=>'PASTORA',
            'nome'=>'RUTE GUIMARÃES DE ANDRADE BENTES',
            'email'=>NULL,
            'igreja'=>'BATISTA GETSEMANI',
            'dnas'=>'1957-01-09 00:00:00',
            'naturalde'=>'RJ',
            'rg'=>'307.952',
            'cpf'=>'613.273.796-00',
            'data_filiacao'=>'1992-07-26 00:00:00',
            'data_ordenacao'=>'1987-11-15 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>369,
            'titulo'=>'PASTORA',
            'nome'=>'LUCIANA EDUARDA DE PAULA E PAULA',
            'email'=>'eduardaalice@yahoo.com.br',
            'igreja'=>'BATISTA NACIONAL GOEL',
            'dnas'=>'1970-03-14 00:00:00',
            'naturalde'=>'BELO HORIZONTE',
            'rg'=>'M6041709 SSP-MG',
            'cpf'=>'923.947.606-72',
            'data_filiacao'=>'2011-01-20 00:00:00',
            'data_ordenacao'=>'2010-11-14 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>370,
            'titulo'=>'PASTOR',
            'nome'=>'ALEXANDRE AUGUSTO DE PAULA',
            'email'=>'alexandre-paula@ig.com.br',
            'igreja'=>'BATISTA NACIONAL GOEL',
            'dnas'=>'1972-08-06 00:00:00',
            'naturalde'=>'BELO HORIZONTE - MG',
            'rg'=>'M-5 398679',
            'cpf'=>'858.855.686-34',
            'data_filiacao'=>'2011-03-22 00:00:00',
            'data_ordenacao'=>'2010-11-14 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>523,
            'titulo'=>'OBREIRO',
            'nome'=>'JOSE VIDIGAL PRETO BORGES',
            'email'=>'josevidborges@hotmail.com',
            'igreja'=>'BATISTA NACIONAL GOEL',
            'dnas'=>'1952-09-08 00:00:00',
            'naturalde'=>'BELÉM - PA',
            'rg'=>'18614481',
            'cpf'=>'059.839.912-72',
            'data_filiacao'=>'2015-01-25 00:00:00',
            'data_ordenacao'=>'2000-12-20 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>371,
            'titulo'=>'PASTORA',
            'nome'=>'TELMA DE ANDRADE BENTES',
            'email'=>'telminhaunipac@yahoo.com.br',
            'igreja'=>'BATISTA NACIONAL GOEL',
            'dnas'=>'1977-08-04 00:00:00',
            'naturalde'=>'RIO DE JANEIRO',
            'rg'=>'349.469.842 SSPSP',
            'cpf'=>'216.116.398-16',
            'data_filiacao'=>'2011-01-20 00:00:00',
            'data_ordenacao'=>'2010-11-14 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>372,
            'titulo'=>'PASTOR',
            'nome'=>'SERGIO ROBERTO DA CRUZ LEITE',
            'email'=>'sergioroberto108@yahoo.com.br',
            'igreja'=>'BATISTA NACIONAL GOEL',
            'dnas'=>'1964-10-13 00:00:00',
            'naturalde'=>'SANTA CRUZ - RJ',
            'rg'=>'M3260540 SSPMG',
            'cpf'=>'551.795.846-04',
            'data_filiacao'=>'2011-01-20 00:00:00',
            'data_ordenacao'=>'2010-11-14 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>373,
            'titulo'=>'PASTORA',
            'nome'=>'CLÁUDIA MARIA GOULART SABINO VIANA',
            'email'=>NULL,
            'igreja'=>'BATISTA NACIONAL GOEL',
            'dnas'=>'1970-09-09 00:00:00',
            'naturalde'=>'RIO DE JANEIRO - RJ',
            'rg'=>'11298451 SSPMG',
            'cpf'=>'959.626.366-15',
            'data_filiacao'=>'2011-01-20 00:00:00',
            'data_ordenacao'=>'2004-02-01 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>374,
            'titulo'=>'PASTOR',
            'nome'=>'AELSON ESPEDICTO SABINO',
            'email'=>NULL,
            'igreja'=>'BATISTA NACIONAL GOEL',
            'dnas'=>'1972-09-25 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'14148 CA',
            'cpf'=>'205.435.577-15',
            'data_filiacao'=>'2011-01-20 00:00:00',
            'data_ordenacao'=>'2010-11-14 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>375,
            'titulo'=>'PASTOR',
            'nome'=>'CEZAR DE PAULA GOMES RODRIGUES',
            'email'=>'cezarpg@hotmail.com',
            'igreja'=>'BATISTA NACIONAL GOEL',
            'dnas'=>'1980-01-01 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'11280122',
            'cpf'=>'014.137.866-26',
            'data_filiacao'=>'2011-01-20 00:00:00',
            'data_ordenacao'=>'2010-11-14 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>393,
            'titulo'=>'PASTORA',
            'nome'=>'IRENI DE SANTANA DA SILVA',
            'email'=>NULL,
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1957-08-26 00:00:00',
            'naturalde'=>'ARAPONGAS - PR',
            'rg'=>'9.576.371-5',
            'cpf'=>'842.098.799-91',
            'data_filiacao'=>'2011-06-28 00:00:00',
            'data_ordenacao'=>'2011-06-28 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>394,
            'titulo'=>'PASTOR',
            'nome'=>'JORANDIR DA SILVA',
            'email'=>NULL,
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1972-12-07 00:00:00',
            'naturalde'=>'IVAIPORÃ - PR',
            'rg'=>'19.793.183-2',
            'cpf'=>'122.592.368-98',
            'data_filiacao'=>'2011-06-28 00:00:00',
            'data_ordenacao'=>'2011-06-28 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>98,
            'titulo'=>'PASTOR',
            'nome'=>'ANGELO RAIMUNDO BASTIAN',
            'email'=>NULL,
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>NULL,
            'naturalde'=>NULL,
            'rg'=>'3.810.085-8',
            'cpf'=>'581.177.099-53',
            'data_filiacao'=>NULL,
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>102,
            'titulo'=>'PASTOR',
            'nome'=>'ARILDO CAMPESTRINI',
            'email'=>NULL,
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>NULL,
            'naturalde'=>NULL,
            'rg'=>'1.403.419-6',
            'cpf'=>'283.612.969-72',
            'data_filiacao'=>'2003-04-26 00:00:00',
            'data_ordenacao'=>'2003-04-26 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>116,
            'titulo'=>'PASTOR',
            'nome'=>'DAVI VALIN FREIRE',
            'email'=>'bpdavi@casadeoraçao.org.com',
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1956-04-07 00:00:00',
            'naturalde'=>'BARRA DE SÃO FRANCISCO - ES',
            'rg'=>'1.361.390',
            'cpf'=>'334.196.209-34',
            'data_filiacao'=>'1992-05-20 00:00:00',
            'data_ordenacao'=>'1988-10-08 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>117,
            'titulo'=>'PASTORA',
            'nome'=>'EDINISI DOS SANTOS FREIRE',
            'email'=>'bpdavi@casadeoraçao.org.br',
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1958-10-21 00:00:00',
            'naturalde'=>'ARAPONGAS',
            'rg'=>NULL,
            'cpf'=>NULL,
            'data_filiacao'=>'1992-05-20 00:00:00',
            'data_ordenacao'=>'1988-10-08 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>157,
            'titulo'=>'PASTOR',
            'nome'=>'JOÃO CARLOS DE ABREU',
            'email'=>NULL,
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1969-08-06 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'5.098.422-2',
            'cpf'=>'618.171.719-68',
            'data_filiacao'=>NULL,
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>158,
            'titulo'=>'PASTOR',
            'nome'=>'JOÃO MARIA DA SILVEIRA',
            'email'=>NULL,
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>NULL,
            'naturalde'=>NULL,
            'rg'=>'1.450.170-3',
            'cpf'=>NULL,
            'data_filiacao'=>NULL,
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>10,
            'titulo'=>'APÓSTOLO',
            'nome'=>'CELSINO MARQUES DE AZEVEDO',
            'email'=>'celsino@live.com',
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1942-03-25 00:00:00',
            'naturalde'=>'BANANAL - MG',
            'rg'=>'598.989',
            'cpf'=>'062.887.669-68',
            'data_filiacao'=>NULL,
            'data_ordenacao'=>'1968-02-11 00:00:00',
            'obs'=>'9961-0244 Tim'
        ] );
        
        Member::create( [
            'id'=>11,
            'titulo'=>'BISPA',
            'nome'=>'JÚNIA LAMÔNICA AZEVEDO',
            'email'=>'celsino@live.com',
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1949-04-11 00:00:00',
            'naturalde'=>'MARIALVA - PR',
            'rg'=>'1.014.829',
            'cpf'=>'954.514.639-72',
            'data_filiacao'=>NULL,
            'data_ordenacao'=>'1987-03-15 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>12,
            'titulo'=>'PASTOR',
            'nome'=>'JOED LAMONICA CRESPO',
            'email'=>'joedcrespo@gmail.com',
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1950-08-05 00:00:00',
            'naturalde'=>'MANDAGUARI - PR',
            'rg'=>'730.808',
            'cpf'=>'022.313.799-53',
            'data_filiacao'=>'1996-07-08 00:00:00',
            'data_ordenacao'=>'1969-08-16 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>17,
            'titulo'=>'PASTOR',
            'nome'=>'DESIEL JULIO DE OLIVEIRA',
            'email'=>NULL,
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1971-11-14 00:00:00',
            'naturalde'=>'CURITIBA - PR',
            'rg'=>'5.140.937-0',
            'cpf'=>'691.753.149-91',
            'data_filiacao'=>'2001-07-01 00:00:00',
            'data_ordenacao'=>'2001-07-01 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>18,
            'titulo'=>'PASTORA',
            'nome'=>'TELCIA LAMÔNIA DE AZEVEDO OLIVEIRA',
            'email'=>NULL,
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1971-07-16 00:00:00',
            'naturalde'=>'PÉROLA-PR',
            'rg'=>'4.747.940-1',
            'cpf'=>'858.761.869-53',
            'data_filiacao'=>'2001-07-01 00:00:00',
            'data_ordenacao'=>'2001-07-01 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>19,
            'titulo'=>'PASTOR',
            'nome'=>'LISANIAS VIEIRA LOBACK',
            'email'=>'pastorlisanias@gmail.com',
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1972-07-24 00:00:00',
            'naturalde'=>'MANAUS - AM',
            'rg'=>'26.466.459-0',
            'cpf'=>'896.815.259-49',
            'data_filiacao'=>'2003-02-16 00:00:00',
            'data_ordenacao'=>'2003-02-16 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>20,
            'titulo'=>'PASTORA',
            'nome'=>'LIDIA DA CONCEIÇÃO LUCAS LOBACK',
            'email'=>'loback@familialoback.com',
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1976-04-17 00:00:00',
            'naturalde'=>'CIANORTE - PR',
            'rg'=>'36.467.355-2 SESPSP',
            'cpf'=>'016.068.939-20',
            'data_filiacao'=>'2003-02-16 00:00:00',
            'data_ordenacao'=>'2003-02-16 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>21,
            'titulo'=>'PASTORA',
            'nome'=>'NOEME CARLOS LAMÔNICA CRESPO',
            'email'=>NULL,
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>NULL,
            'naturalde'=>NULL,
            'rg'=>NULL,
            'cpf'=>NULL,
            'data_filiacao'=>NULL,
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>23,
            'titulo'=>'PASTORA',
            'nome'=>'ANTONIA PARRA DA SILVA',
            'email'=>NULL,
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1943-08-29 00:00:00',
            'naturalde'=>'CAMBÉ - PR',
            'rg'=>'893.788',
            'cpf'=>'062.400.389-20',
            'data_filiacao'=>'1996-08-01 00:00:00',
            'data_ordenacao'=>'1996-08-01 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>64,
            'titulo'=>'EVANGELISTA',
            'nome'=>'CLAUDENIR DE OLIVEIRA',
            'email'=>NULL,
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1968-02-24 00:00:00',
            'naturalde'=>'JATAIZINHO - PR',
            'rg'=>'3.633.082-1  SSPPR',
            'cpf'=>'550.570.989-34',
            'data_filiacao'=>'2004-01-22 00:00:00',
            'data_ordenacao'=>'2004-01-22 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>66,
            'titulo'=>'PASTORA',
            'nome'=>'TANIA LAMÔNICA AZEVEDO DA SILVA',
            'email'=>'tanialamonicaazevedo@hotmail.com',
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1968-05-03 00:00:00',
            'naturalde'=>'UMUARAMA - PR',
            'rg'=>'4.210.671-2',
            'cpf'=>'658.719.019-72',
            'data_filiacao'=>'2005-12-11 00:00:00',
            'data_ordenacao'=>'2005-12-11 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>67,
            'titulo'=>'PASTOR',
            'nome'=>'EVALDO MARCOS DA SILVA',
            'email'=>'evaldomarcos@hotmail.com',
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1963-09-15 00:00:00',
            'naturalde'=>'APUCARANA - PR',
            'rg'=>'3.497.830-1',
            'cpf'=>'481.129.419-04',
            'data_filiacao'=>'2005-12-11 00:00:00',
            'data_ordenacao'=>'2005-12-11 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>147,
            'titulo'=>'PASTOR',
            'nome'=>'IVAN PIRES DE CAMARGO',
            'email'=>NULL,
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1947-04-14 00:00:00',
            'naturalde'=>'PIRAJÚ - SP',
            'rg'=>'459.103',
            'cpf'=>'002.152.289-87',
            'data_filiacao'=>'2001-08-26 00:00:00',
            'data_ordenacao'=>'1997-09-21 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>148,
            'titulo'=>'PASTORA',
            'nome'=>'ERONDINA SOUZA DE CAMARGO',
            'email'=>NULL,
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1948-10-15 00:00:00',
            'naturalde'=>'CAMBÉ - PR',
            'rg'=>'601.173',
            'cpf'=>'324.399.039-49',
            'data_filiacao'=>'2001-08-26 00:00:00',
            'data_ordenacao'=>'2001-08-26 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>236,
            'titulo'=>'PASTORA',
            'nome'=>'ROSELI MARIA ALMEIDA DA SILVA',
            'email'=>NULL,
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>NULL,
            'naturalde'=>'SÃO PAULO - SP',
            'rg'=>NULL,
            'cpf'=>NULL,
            'data_filiacao'=>NULL,
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>267,
            'titulo'=>'PASTORA',
            'nome'=>'CLARICE DAS DORES FARIAS GOULARD',
            'email'=>NULL,
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1944-05-11 00:00:00',
            'naturalde'=>'STO. ANTÔNIO DA ALEGRIA - SP',
            'rg'=>'3.098.710-1',
            'cpf'=>'237.698.749-00',
            'data_filiacao'=>'1998-10-11 00:00:00',
            'data_ordenacao'=>'1998-10-11 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>284,
            'titulo'=>'PASTORA',
            'nome'=>'TÂNIA SALES RODRIGUES',
            'email'=>NULL,
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1954-10-08 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'5.173.769.5',
            'cpf'=>'036.650.749-40',
            'data_filiacao'=>'2008-01-11 00:00:00',
            'data_ordenacao'=>'1987-10-08 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>368,
            'titulo'=>'EVANGELISTA',
            'nome'=>'ÁLVARO ESTEVANO VICTER',
            'email'=>NULL,
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1953-07-27 00:00:00',
            'naturalde'=>'ITAJOBI SP',
            'rg'=>'1.966.894-4 PR',
            'cpf'=>'240.378.269-68',
            'data_filiacao'=>'2010-09-02 00:00:00',
            'data_ordenacao'=>'2010-09-02 00:00:00',
            'obs'=>'Evangelista Pessoal'
        ] );
        
        Member::create( [
            'id'=>381,
            'titulo'=>'PASTOR',
            'nome'=>'VANDERLEI OLIVEIRA DE PAIVA',
            'email'=>NULL,
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1965-10-26 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'3.528.660-8 SSP-PR',
            'cpf'=>'474.811.619-68',
            'data_filiacao'=>'2011-03-22 00:00:00',
            'data_ordenacao'=>'2011-03-22 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>403,
            'titulo'=>'PASTORA',
            'nome'=>'GLEYCE NASCIMENTO SIMÕES DA SILVA',
            'email'=>NULL,
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1965-06-03 00:00:00',
            'naturalde'=>'ARAPONGAS',
            'rg'=>'07.931.155-1',
            'cpf'=>'849.605.907-34',
            'data_filiacao'=>'1911-07-24 00:00:00',
            'data_ordenacao'=>'1911-07-24 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>464,
            'titulo'=>'PASTOR',
            'nome'=>'ALEX ANGELO DE OLIVEIRA COSTA',
            'email'=>'alexaocosta@hotmail.com',
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1968-07-12 00:00:00',
            'naturalde'=>'CAMPINAS - SP',
            'rg'=>'4.318.036-3',
            'cpf'=>'724.450.689-91',
            'data_filiacao'=>'2014-10-21 00:00:00',
            'data_ordenacao'=>'2018-04-14 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>468,
            'titulo'=>'PASTOR',
            'nome'=>'RODRIGO CARNELOSSI DOS SANTOS',
            'email'=>'rodrigocarnellossi@gmail.com',
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1983-02-02 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'8.289.912-0',
            'cpf'=>'037.004.659-55',
            'data_filiacao'=>'2014-01-15 00:00:00',
            'data_ordenacao'=>'2015-07-30 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>469,
            'titulo'=>'PASTORA',
            'nome'=>'DANIELA FONSECA VERZANI CARNELLOSSI',
            'email'=>'danyelaver@hotmail.com',
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1978-08-31 00:00:00',
            'naturalde'=>'CAMAQUA - RS',
            'rg'=>'14.102.114-1',
            'cpf'=>'982.678.680-20',
            'data_filiacao'=>'2015-01-25 00:00:00',
            'data_ordenacao'=>'2010-07-18 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>470,
            'titulo'=>'PASTORA',
            'nome'=>'TATIANE GERMANO DA SILVA',
            'email'=>'tatianecarnelossi@gmail.com',
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1993-04-24 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'12.712.492-2',
            'cpf'=>'092.581.789-98',
            'data_filiacao'=>'2015-01-25 00:00:00',
            'data_ordenacao'=>'2014-07-30 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>475,
            'titulo'=>'PASTOR',
            'nome'=>'JOSE FAUSTINO DA SILVA',
            'email'=>NULL,
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1938-12-22 00:00:00',
            'naturalde'=>'BAIXIO - CE',
            'rg'=>'6.922.790-2 SSP',
            'cpf'=>'949.165.008-49',
            'data_filiacao'=>'2015-03-11 00:00:00',
            'data_ordenacao'=>'2015-03-11 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>476,
            'titulo'=>'PASTORA',
            'nome'=>'CONCEIÇÃO APARECIDA DE GOUVEIA SILVA',
            'email'=>NULL,
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1943-12-10 00:00:00',
            'naturalde'=>'CASA GRANDE - SP',
            'rg'=>'15.591.133',
            'cpf'=>'096.655.048-00',
            'data_filiacao'=>'2015-03-11 00:00:00',
            'data_ordenacao'=>'2015-03-11 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>535,
            'titulo'=>'OBREIRA',
            'nome'=>'CREUDA ELAINE DE OLIVEIRA DA SILVA',
            'email'=>'elaine.p.v@hotmail.com',
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1972-12-25 00:00:00',
            'naturalde'=>'FAXINAL - PR',
            'rg'=>'5644518-8',
            'cpf'=>'934.586.739-20',
            'data_filiacao'=>'2016-06-14 00:00:00',
            'data_ordenacao'=>'2016-06-14 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>536,
            'titulo'=>'OBREIRO',
            'nome'=>'PAULO SÉRGIO PARRA DA SILVA',
            'email'=>'paulinho_parra@hotmail.com',
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1969-07-08 00:00:00',
            'naturalde'=>'CALIFÓRNIA - PR',
            'rg'=>'50689569',
            'cpf'=>'721.370.709-44',
            'data_filiacao'=>'2016-06-14 00:00:00',
            'data_ordenacao'=>'2016-06-14 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>537,
            'titulo'=>'OBREIRA',
            'nome'=>'MYLENA LAMÔNICA AZEVEDO DA SILVA',
            'email'=>NULL,
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>NULL,
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'130249809',
            'cpf'=>'094.220.989-39',
            'data_filiacao'=>'2016-06-14 00:00:00',
            'data_ordenacao'=>'2016-06-14 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>400,
            'titulo'=>'PASTOR',
            'nome'=>'MATHEUS SIMÕES DA SILVA',
            'email'=>NULL,
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1987-07-24 00:00:00',
            'naturalde'=>'RIO DE JANEIRO - RJ',
            'rg'=>'9.404.999-4 SSPR',
            'cpf'=>'066.137.279-03',
            'data_filiacao'=>'2011-06-28 00:00:00',
            'data_ordenacao'=>'2007-10-27 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>401,
            'titulo'=>'PASTORA',
            'nome'=>'RENATA FERMINO DA SILVA',
            'email'=>NULL,
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1988-01-18 00:00:00',
            'naturalde'=>'BANDERIRANTES - PR',
            'rg'=>'9.774.026-7 SSPPR',
            'cpf'=>'059.331.729-79',
            'data_filiacao'=>'2011-06-28 00:00:00',
            'data_ordenacao'=>'2011-06-28 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>555,
            'titulo'=>'PASTORA',
            'nome'=>'MARILDA DE FÁTIMA SEVILA VERSAN',
            'email'=>NULL,
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1964-12-15 00:00:00',
            'naturalde'=>'ITAMBÉ-PR',
            'rg'=>'38947265',
            'cpf'=>'919.177.279-68',
            'data_filiacao'=>'2018-04-12 00:00:00',
            'data_ordenacao'=>'2018-04-12 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>87,
            'titulo'=>'PASTOR',
            'nome'=>'ALDENIS MIRANDA',
            'email'=>NULL,
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>NULL,
            'naturalde'=>NULL,
            'rg'=>'4.766.824-7',
            'cpf'=>'662.341.409-63',
            'data_filiacao'=>NULL,
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>16,
            'titulo'=>'PASTORA',
            'nome'=>'NEUZA RUELIS DA COSTA RAMOS',
            'email'=>NULL,
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1943-04-15 00:00:00',
            'naturalde'=>'PONTO DO ITABAPOANA - ES',
            'rg'=>'2.023.611',
            'cpf'=>'025.766.739-54',
            'data_filiacao'=>'1991-07-28 00:00:00',
            'data_ordenacao'=>'1991-07-28 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>417,
            'titulo'=>'PASTOR',
            'nome'=>'ALEXSSANDRO DE FREITAS',
            'email'=>NULL,
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS - VILA ISABEL',
            'dnas'=>'1979-12-05 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'7.660.317-0',
            'cpf'=>'029.380.439-70',
            'data_filiacao'=>'2012-06-19 00:00:00',
            'data_ordenacao'=>'2012-06-19 00:00:00',
            'obs'=>'PASTOR'
        ] );
        
        Member::create( [
            'id'=>471,
            'titulo'=>'PASTOR',
            'nome'=>'MOISES BENTO SAPUCAIA',
            'email'=>'mbsapucaia@hotmail.com',
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS - VILA ISABEL',
            'dnas'=>'1968-04-21 00:00:00',
            'naturalde'=>'SÃO PAULO',
            'rg'=>'19.987.026',
            'cpf'=>'093.628.938-43',
            'data_filiacao'=>'2015-12-30 00:00:00',
            'data_ordenacao'=>'2015-12-30 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>472,
            'titulo'=>'PASTORA',
            'nome'=>'MARIA ELISABETE DA SILVA SAPUCAIA',
            'email'=>'elisabete.sapucaia@hotmail.com',
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS - VILA ISABEL',
            'dnas'=>'1971-01-27 00:00:00',
            'naturalde'=>'LONDRINA',
            'rg'=>'35.843.914-0',
            'cpf'=>'730.956.809-53',
            'data_filiacao'=>'2015-01-25 00:00:00',
            'data_ordenacao'=>'2015-07-30 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>396,
            'titulo'=>'PASTOR',
            'nome'=>'JOÃO ALBERTO DOS SANTOS BOENO',
            'email'=>NULL,
            'igreja'=>'CASA DE ORAÇÃO PARA TODOS OS POVOS E NAÇÕES',
            'dnas'=>'1952-07-12 00:00:00',
            'naturalde'=>'SÃO VICENTE DO SUL - RG',
            'rg'=>'1.692.239-0 SSP-PR',
            'cpf'=>'310.609.009-04',
            'data_filiacao'=>'2011-06-28 00:00:00',
            'data_ordenacao'=>'2011-06-04 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>473,
            'titulo'=>'PASTOR',
            'nome'=>'OSCAR EDUARDO LOPEZ MORENO',
            'email'=>NULL,
            'igreja'=>'CENTRO FAMILIAR KAIRÓS PARA O MUNDO',
            'dnas'=>'1975-06-19 00:00:00',
            'naturalde'=>'BOGOTÁ COLOMBIA',
            'rg'=>'407338 - DPF',
            'cpf'=>'011.259.169-82',
            'data_filiacao'=>'2015-01-26 00:00:00',
            'data_ordenacao'=>'2003-04-23 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>474,
            'titulo'=>'PASTORA',
            'nome'=>'PAOLA ANDREA VARÓN ORTIZ',
            'email'=>NULL,
            'igreja'=>'CENTRO FAMILIAR KAIRÓS PARA O MUNDO',
            'dnas'=>'1975-05-15 00:00:00',
            'naturalde'=>'BOGOTA - COLOMBIA',
            'rg'=>'407343',
            'cpf'=>'011.259.139-67',
            'data_filiacao'=>'2015-01-26 00:00:00',
            'data_ordenacao'=>'2003-04-23 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>182,
            'titulo'=>'PASTOR',
            'nome'=>'MARCOS ELY FACUNDO',
            'email'=>NULL,
            'igreja'=>'COERP',
            'dnas'=>'1967-05-11 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'4.561.795-5',
            'cpf'=>'365.839.529-04',
            'data_filiacao'=>'1988-09-18 00:00:00',
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>518,
            'titulo'=>'PASTOR',
            'nome'=>'EDVALDO SILVA NEVES',
            'email'=>'pr_edvaldoneves@hotmail.com',
            'igreja'=>'COMUNIDA CRISTA AGAPE',
            'dnas'=>'1953-08-23 00:00:00',
            'naturalde'=>'GUARACI',
            'rg'=>'486564',
            'cpf'=>'278.752.709-44',
            'data_filiacao'=>NULL,
            'data_ordenacao'=>NULL,
            'obs'=>'Filiação  2015  Ordenação 1981 RENOVADA'
        ] );
        
        Member::create( [
            'id'=>519,
            'titulo'=>'PASTORA',
            'nome'=>'SONIA CASTRO NEVES',
            'email'=>'pr_edvaldoneves@hotmail.com',
            'igreja'=>'COMUNIDA CRISTA AGAPE',
            'dnas'=>'1965-08-27 00:00:00',
            'naturalde'=>'INDIANOPOLIS PR',
            'rg'=>'4318880-1',
            'cpf'=>'595.968.059-91',
            'data_filiacao'=>NULL,
            'data_ordenacao'=>NULL,
            'obs'=>'Usar (43) para o celular.'
        ] );
        
        Member::create( [
            'id'=>259,
            'titulo'=>'PASTOR',
            'nome'=>'WILSON DE SANTANA',
            'email'=>'pastorwilsonsantana@hotmail.com',
            'igreja'=>'COMUNIDADE ALVA',
            'dnas'=>'1958-09-01 00:00:00',
            'naturalde'=>'ARAPONGAS',
            'rg'=>'36.799.103-2',
            'cpf'=>'362.143.539-53',
            'data_filiacao'=>'1995-11-04 00:00:00',
            'data_ordenacao'=>'1995-11-04 00:00:00',
            'obs'=>'3423-5878'
        ] );
        
        Member::create( [
            'id'=>260,
            'titulo'=>'PASTORA',
            'nome'=>'SANDRA COCK SANTANA',
            'email'=>'pastorwilsonsantana@hotmail.com',
            'igreja'=>'COMUNIDADE ALVA',
            'dnas'=>'1972-11-26 00:00:00',
            'naturalde'=>'MARILANDIA DO SUL - PR',
            'rg'=>'6.376.771-9',
            'cpf'=>'878.120.459-00',
            'data_filiacao'=>'1995-11-04 00:00:00',
            'data_ordenacao'=>'1995-11-04 00:00:00',
            'obs'=>'3423-5878'
        ] );
        
        Member::create( [
            'id'=>409,
            'titulo'=>'PASTOR',
            'nome'=>'SAMUEL TEIXEIRA NEVES FALCONE',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE BATISTA NOVA FLORESTA',
            'dnas'=>'1974-12-31 00:00:00',
            'naturalde'=>'BELO HORIZONTE',
            'rg'=>'4589347',
            'cpf'=>'820.638.266-68',
            'data_filiacao'=>'2012-01-22 00:00:00',
            'data_ordenacao'=>'2012-01-22 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>344,
            'titulo'=>'PASTOR',
            'nome'=>'MARCO ANTONIO OLIVEIRA SILVA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1974-07-02 00:00:00',
            'naturalde'=>'CAMPO GRANDE',
            'rg'=>'000870060',
            'cpf'=>'710.445.071-87',
            'data_filiacao'=>'2009-10-20 00:00:00',
            'data_ordenacao'=>'2009-08-16 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>345,
            'titulo'=>'PASTORA',
            'nome'=>'ROSIMARI DA SILVA SANTOS OLIVEIRA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1968-10-13 00:00:00',
            'naturalde'=>'DOURADOS',
            'rg'=>'501789',
            'cpf'=>'447.839.901-82',
            'data_filiacao'=>'2009-10-20 00:00:00',
            'data_ordenacao'=>'2009-08-16 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>180,
            'titulo'=>'PASTOR',
            'nome'=>'MARCELO JULIO DE OLIVEIRA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>NULL,
            'naturalde'=>NULL,
            'rg'=>'25.329.876-3',
            'cpf'=>'265.845.318-30',
            'data_filiacao'=>'2003-04-26 00:00:00',
            'data_ordenacao'=>'2003-04-26 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>481,
            'titulo'=>'PASTORA',
            'nome'=>'PATRÍCIA NAGEL TAVARES',
            'email'=>'foiporvoce@hotmail.com',
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1982-10-20 00:00:00',
            'naturalde'=>'MARECHAL CANDIDO RONDON-PR',
            'rg'=>'7.608.653-2 SESP-PR',
            'cpf'=>'040.578.319-16',
            'data_filiacao'=>'2013-12-08 00:00:00',
            'data_ordenacao'=>'2013-12-08 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>482,
            'titulo'=>'PASTOR',
            'nome'=>'MARCOS BEZERRA TAVARES',
            'email'=>'tavaresatos77@hotmail.com',
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1986-07-05 00:00:00',
            'naturalde'=>'CAMPO GRANDE - MS',
            'rg'=>'1443996 SESP-MS',
            'cpf'=>'010.642.131-03',
            'data_filiacao'=>'2013-12-08 00:00:00',
            'data_ordenacao'=>'2013-12-08 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>139,
            'titulo'=>'PASTOR',
            'nome'=>'CELSO MARTINS FILHO',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>NULL,
            'naturalde'=>NULL,
            'rg'=>NULL,
            'cpf'=>NULL,
            'data_filiacao'=>NULL,
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>74,
            'titulo'=>'PASTORA',
            'nome'=>'VALÉRIA FARINA PENHA SIQUEIRA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1978-04-06 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'6.904.527-8',
            'cpf'=>'026.054.209-03',
            'data_filiacao'=>'2006-02-04 00:00:00',
            'data_ordenacao'=>'2006-02-04 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>75,
            'titulo'=>'EVANGELISTA',
            'nome'=>'RODOLFO ALMEIDA E SILVA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1979-06-15 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'7.078.463-7',
            'cpf'=>'018.121.249-88',
            'data_filiacao'=>'2006-02-04 00:00:00',
            'data_ordenacao'=>'2007-02-03 00:00:00',
            'obs'=>'04/02/2006 - Ordenado a Evangelista'
        ] );
        
        Member::create( [
            'id'=>76,
            'titulo'=>'EVANGELISTA',
            'nome'=>'WANDERLAINE BREATRIZ RODRIGUES DE MORAIS E SILVA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1982-02-26 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'8.531.109-3',
            'cpf'=>'038.814.419-05',
            'data_filiacao'=>'2006-02-04 00:00:00',
            'data_ordenacao'=>'2007-02-03 00:00:00',
            'obs'=>'Ordenação a Evangelista: 04/02/2006'
        ] );
        
        Member::create( [
            'id'=>269,
            'titulo'=>'EVANGELISTA',
            'nome'=>'OSVALDIR PAES',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1962-10-16 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'384.379-3',
            'cpf'=>'444.620.429-72',
            'data_filiacao'=>'2007-02-03 00:00:00',
            'data_ordenacao'=>'2007-02-03 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>272,
            'titulo'=>'EVANGELISTA',
            'nome'=>'ANTÔNIA ELIZIÁRIO',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1958-07-31 00:00:00',
            'naturalde'=>'LONDRINA',
            'rg'=>'4.627.781.3',
            'cpf'=>'661.569.639-87',
            'data_filiacao'=>'2007-02-03 00:00:00',
            'data_ordenacao'=>'2007-02-03 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>273,
            'titulo'=>'EVANGELISTA',
            'nome'=>'IVONEI MARCOS THEODORO',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1970-05-25 00:00:00',
            'naturalde'=>'LONDRINA',
            'rg'=>'4.407.636-5',
            'cpf'=>'643.036.409-72',
            'data_filiacao'=>'2007-02-03 00:00:00',
            'data_ordenacao'=>'2007-02-03 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>274,
            'titulo'=>'EVANGELISTA',
            'nome'=>'MARA DALILA RODRIGUES DA SILVA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1973-02-25 00:00:00',
            'naturalde'=>'IBIPORÃ',
            'rg'=>'5.004.911-6',
            'cpf'=>'908.756.809-68',
            'data_filiacao'=>'2007-02-03 00:00:00',
            'data_ordenacao'=>'2007-02-03 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>275,
            'titulo'=>'PASTOR',
            'nome'=>'MARCELO CHERNEV DA SILVA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1977-09-26 00:00:00',
            'naturalde'=>'LONDRINA',
            'rg'=>'6.549.414-0',
            'cpf'=>'022.120.949-22',
            'data_filiacao'=>'2007-02-03 00:00:00',
            'data_ordenacao'=>'2007-02-03 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>276,
            'titulo'=>'PASTORA',
            'nome'=>'LUCIANE SIQUEIRA ALBERTTI',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1980-10-28 00:00:00',
            'naturalde'=>'LONDRINA',
            'rg'=>'7.979.220-9',
            'cpf'=>'036.613.569-41',
            'data_filiacao'=>'2007-02-03 00:00:00',
            'data_ordenacao'=>'2007-02-03 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>293,
            'titulo'=>'PREBITERO',
            'nome'=>'SÉRGIO FRANÇA MOREIRA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1975-03-25 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'6701501-0',
            'cpf'=>'021.827.709-19',
            'data_filiacao'=>'2008-03-15 00:00:00',
            'data_ordenacao'=>'2002-03-15 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>296,
            'titulo'=>'PASTOR',
            'nome'=>'JOSÉ CARLOS BARBOSA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1966-08-05 00:00:00',
            'naturalde'=>'CENTENÁRIO DO SUL - PR',
            'rg'=>'4.163.157-0 SSP/PR',
            'cpf'=>'571.885.729-68',
            'data_filiacao'=>'2008-03-15 00:00:00',
            'data_ordenacao'=>'2006-09-22 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>303,
            'titulo'=>'OBREIRO',
            'nome'=>'JOSÉ ANTONIO ELIZIÁRIO',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1958-07-31 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'3.4073171-3',
            'cpf'=>'647.935.919-49',
            'data_filiacao'=>'2007-02-03 00:00:00',
            'data_ordenacao'=>'2007-02-03 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>432,
            'titulo'=>'PASTOR',
            'nome'=>'WAGNER NELSON DE OLIVEIRA',
            'email'=>'prwagnernelson@hotmail.com',
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1966-01-19 00:00:00',
            'naturalde'=>'CIANORTE - PR',
            'rg'=>'5.369.770-4 SSP-PR',
            'cpf'=>'570.857.739-87',
            'data_filiacao'=>'2013-02-13 00:00:00',
            'data_ordenacao'=>'2004-07-24 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>433,
            'titulo'=>'PASTORA',
            'nome'=>'VIVIANE S. MARTINS DE OLIVEIRA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1976-06-27 00:00:00',
            'naturalde'=>'CIANORTE - PR',
            'rg'=>'6.936.786.0 SSP-PR',
            'cpf'=>'014.850.669-05',
            'data_filiacao'=>'2013-02-13 00:00:00',
            'data_ordenacao'=>'2004-07-24 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>129,
            'titulo'=>'BISPO',
            'nome'=>'ELI AGUIAR DE SOUZA',
            'email'=>'pastor.eliaguiar@hotmail.com',
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1949-09-01 00:00:00',
            'naturalde'=>'MARIALVA - PR',
            'rg'=>'727.710-5 SSP-PR',
            'cpf'=>'023.354.769-04',
            'data_filiacao'=>'1993-07-24 00:00:00',
            'data_ordenacao'=>'1993-07-24 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>130,
            'titulo'=>'BISPA',
            'nome'=>'JUDITH LAMÔNICA DE AGUIAR',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1947-03-10 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'930.511-4 SSP-PR',
            'cpf'=>'436.096.609-10',
            'data_filiacao'=>'1993-07-24 00:00:00',
            'data_ordenacao'=>'1993-07-24 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>145,
            'titulo'=>'PASTOR',
            'nome'=>'IVALDO SILVA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1959-07-15 00:00:00',
            'naturalde'=>'SÃO LUIS - MA',
            'rg'=>'908.166',
            'cpf'=>'604.004.587-04',
            'data_filiacao'=>'1997-07-06 00:00:00',
            'data_ordenacao'=>'1992-10-12 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>146,
            'titulo'=>'PASTORA',
            'nome'=>'NEISE BATISTA DOS SANTOS SILVA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1963-08-12 00:00:00',
            'naturalde'=>'ARAPONGAS',
            'rg'=>'36.257.526.5',
            'cpf'=>'524.538.209-15',
            'data_filiacao'=>'1997-07-06 00:00:00',
            'data_ordenacao'=>'1992-10-12 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>177,
            'titulo'=>'PASTORA',
            'nome'=>'LUZIA FAUSTINO CARPINSKI',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1954-05-10 00:00:00',
            'naturalde'=>'CORNÉLIO PROCÓPIO',
            'rg'=>'1.403.379-3',
            'cpf'=>'016.878.856-23',
            'data_filiacao'=>'2001-01-01 00:00:00',
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>209,
            'titulo'=>'PASTOR',
            'nome'=>'PAULO CÉSAR DE CAMARGO',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1960-03-14 00:00:00',
            'naturalde'=>'JAGUAPITÃ - PR',
            'rg'=>'3.162.730-3',
            'cpf'=>'333.107.779-87',
            'data_filiacao'=>'2004-01-22 00:00:00',
            'data_ordenacao'=>'2002-10-26 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>210,
            'titulo'=>'PASTORA',
            'nome'=>'SILVIA CRISTINA D. CAMARGO',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1976-11-21 00:00:00',
            'naturalde'=>'HUMAITÁ - AM',
            'rg'=>'7.641.027.5',
            'cpf'=>'516.954.722-68',
            'data_filiacao'=>'2002-10-26 00:00:00',
            'data_ordenacao'=>'2002-10-26 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>336,
            'titulo'=>'PASTOR',
            'nome'=>'ALTAIDES FRANCISCO GOTTARDO',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1964-03-24 00:00:00',
            'naturalde'=>'ARATIBA',
            'rg'=>'3652278-0',
            'cpf'=>'523.939.179-34',
            'data_filiacao'=>'2009-10-20 00:00:00',
            'data_ordenacao'=>'2009-08-23 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>338,
            'titulo'=>'PASTOR',
            'nome'=>'IVO MISSIO',
            'email'=>'ivomissio@hotmail.com',
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1958-06-02 00:00:00',
            'naturalde'=>'CAIÇARA',
            'rg'=>'1016755827',
            'cpf'=>'326.005.180-53',
            'data_filiacao'=>'2009-10-20 00:00:00',
            'data_ordenacao'=>'2009-08-23 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>339,
            'titulo'=>'PASTORA',
            'nome'=>'SELOIR TEREZINHA FRANCO MISSIO',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1964-02-28 00:00:00',
            'naturalde'=>'HORIZONTINA',
            'rg'=>'52571979',
            'cpf'=>'745.044.959-53',
            'data_filiacao'=>'2009-10-20 00:00:00',
            'data_ordenacao'=>'2009-08-23 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>340,
            'titulo'=>'PASTOR',
            'nome'=>'ELEANDRO ALEX ANTONIO',
            'email'=>'alex@medianeira.com.br',
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1973-10-18 00:00:00',
            'naturalde'=>'CAPANEMA',
            'rg'=>'52571472',
            'cpf'=>'930.540.259-34',
            'data_filiacao'=>'2009-10-20 00:00:00',
            'data_ordenacao'=>'2009-08-23 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>341,
            'titulo'=>'PASTORA',
            'nome'=>'ANGELA AGUIAR ANTONIO',
            'email'=>'angel_doce@hotmail.com',
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1978-03-29 00:00:00',
            'naturalde'=>'CIANORTE',
            'rg'=>'7.163.915-0',
            'cpf'=>NULL,
            'data_filiacao'=>'2009-10-20 00:00:00',
            'data_ordenacao'=>'2009-08-23 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>342,
            'titulo'=>'PASTOR',
            'nome'=>'ÉLITON LAMONICA AGUIAR',
            'email'=>'elitonarquiteto@hotmail.com',
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1974-02-18 00:00:00',
            'naturalde'=>'CIANORTE',
            'rg'=>'593274818',
            'cpf'=>'016.918.349-12',
            'data_filiacao'=>'2009-10-20 00:00:00',
            'data_ordenacao'=>'2009-08-23 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>343,
            'titulo'=>'PASTORA',
            'nome'=>'SILVANA GRASSI AGUIAR',
            'email'=>'silvanagrassihotmail.com',
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1974-10-17 00:00:00',
            'naturalde'=>'CASCAVEL',
            'rg'=>'61394737',
            'cpf'=>'903.218.129-72',
            'data_filiacao'=>'2009-10-20 00:00:00',
            'data_ordenacao'=>'2009-08-23 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>391,
            'titulo'=>'PASTOR',
            'nome'=>'MÁRCIO BECKER',
            'email'=>'becker.adm@gmail.com',
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1978-04-17 00:00:00',
            'naturalde'=>'MISSAL - PR',
            'rg'=>'5.965.804-2 SSP-PR',
            'cpf'=>'023.268.449-98',
            'data_filiacao'=>'2011-03-27 00:00:00',
            'data_ordenacao'=>'2011-03-27 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>392,
            'titulo'=>'PASTORA',
            'nome'=>'SCHEILA CRISTINA CORRÊA BECKER',
            'email'=>'schecorrea@hotmail.com',
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1983-09-11 00:00:00',
            'naturalde'=>'MEDIANEIRA',
            'rg'=>'8937760-9 SSP-PR',
            'cpf'=>'008.486.959-33',
            'data_filiacao'=>'2011-03-27 00:00:00',
            'data_ordenacao'=>'2011-03-27 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>480,
            'titulo'=>'PASTORA',
            'nome'=>'MARLENE OTTONI',
            'email'=>'marlene.ottoni@hotmail.com',
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1956-10-06 00:00:00',
            'naturalde'=>'ARATIBA',
            'rg'=>'5.406.209-5 SSP-PR',
            'cpf'=>'408.763.069-20',
            'data_filiacao'=>'2014-06-22 00:00:00',
            'data_ordenacao'=>'2014-06-22 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>565,
            'titulo'=>'PASTORA',
            'nome'=>'MARIA DE LOURDES GOTTARDO',
            'email'=>'maria@gott@hotmail.com',
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1963-06-24 00:00:00',
            'naturalde'=>'XANCARÉ - SC',
            'rg'=>'3.590.004-7',
            'cpf'=>'502.236.319-49',
            'data_filiacao'=>'2009-08-23 00:00:00',
            'data_ordenacao'=>'2009-08-23 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>311,
            'titulo'=>'PASTOR',
            'nome'=>'JULIO CÉSAR DIAS BATISTA',
            'email'=>'julio_de_cristo@hotmail.com',
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1984-01-03 00:00:00',
            'naturalde'=>'FOZ DO IGUAÇU',
            'rg'=>'8155742-0',
            'cpf'=>'039.651.079-50',
            'data_filiacao'=>'2008-02-10 00:00:00',
            'data_ordenacao'=>'2008-02-10 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>376,
            'titulo'=>'PASTORA',
            'nome'=>'MARIA ISABEL BALBINO BATISTA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1974-01-24 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'6.653.641-6',
            'cpf'=>NULL,
            'data_filiacao'=>'2011-03-22 00:00:00',
            'data_ordenacao'=>'2008-11-29 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>334,
            'titulo'=>'PASTOR',
            'nome'=>'LORIS MENON',
            'email'=>'loris.menon@timacagro.com.br',
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1965-03-02 00:00:00',
            'naturalde'=>'MEDIANEIRA',
            'rg'=>'3746460-0',
            'cpf'=>'558.465.729-87',
            'data_filiacao'=>'2009-10-20 00:00:00',
            'data_ordenacao'=>'2009-03-08 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>335,
            'titulo'=>'PASTORA',
            'nome'=>'ELCELI MARTA DE BASTIANI MENON',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1969-01-23 00:00:00',
            'naturalde'=>'MEDIANEIRA',
            'rg'=>'4.381.763-9 SSP-PR',
            'cpf'=>'468.733.251-04',
            'data_filiacao'=>'2009-10-20 00:00:00',
            'data_ordenacao'=>'2009-03-08 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>423,
            'titulo'=>'PASTORA',
            'nome'=>'GLEICIANE DA CUNHA BARBIERO',
            'email'=>'gleicicunha@hotmail.com',
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1978-03-06 00:00:00',
            'naturalde'=>'CHAPADA DOS GUIMARÃES - MT',
            'rg'=>'73499976 SSPPR',
            'cpf'=>'005.891.319-07',
            'data_filiacao'=>'2012-10-08 00:00:00',
            'data_ordenacao'=>'2012-07-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>424,
            'titulo'=>'PASTOR',
            'nome'=>'ANDERSON DE SOUZA BARBIERO',
            'email'=>'pranderbarbiero@hotmail.com',
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1985-02-05 00:00:00',
            'naturalde'=>'SÃO MIGUEL DO IGUAÇU',
            'rg'=>'8812514-2',
            'cpf'=>'048.563.219-51',
            'data_filiacao'=>'2012-10-08 00:00:00',
            'data_ordenacao'=>'2012-07-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>538,
            'titulo'=>'PASTORA',
            'nome'=>'JULIANA CALDANI DA ROSA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1983-11-25 00:00:00',
            'naturalde'=>'CASCAVEL - PR',
            'rg'=>'7.405.171-5',
            'cpf'=>'045.597.529-90',
            'data_filiacao'=>'2016-07-24 00:00:00',
            'data_ordenacao'=>'2016-04-17 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>539,
            'titulo'=>'PASTOR',
            'nome'=>'MARCOS FERNANDO DA ROSA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1984-09-10 00:00:00',
            'naturalde'=>'TANGARA SERRA - MT',
            'rg'=>'8895.131-0',
            'cpf'=>'040.537.429-19',
            'data_filiacao'=>'2016-07-20 00:00:00',
            'data_ordenacao'=>'2016-04-17 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>570,
            'titulo'=>'PASTOR',
            'nome'=>'WILLIAN FERREIRA',
            'email'=>'willian.ferreira@sharkdistribuidora.com.br',
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1989-03-04 00:00:00',
            'naturalde'=>'SÃO MIGUEL DO IGUAÇU',
            'rg'=>'90902768',
            'cpf'=>'070.752.919-04',
            'data_filiacao'=>'2018-12-02 00:00:00',
            'data_ordenacao'=>'2018-12-02 00:00:00',
            'obs'=>'PASTOR AUXILIAR'
        ] );
        
        Member::create( [
            'id'=>571,
            'titulo'=>'PASTORA',
            'nome'=>'PAULA SUELI EVANGELISTA FERREIRA',
            'email'=>'willian.ferreira@sharkdistribuidora.com.br',
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1990-10-10 00:00:00',
            'naturalde'=>'FOZ DO IGUAÇU',
            'rg'=>'106776547',
            'cpf'=>'078.243.089-95',
            'data_filiacao'=>'2018-12-02 00:00:00',
            'data_ordenacao'=>'2018-12-02 00:00:00',
            'obs'=>'PASTORA AUXILIAR'
        ] );
        
        Member::create( [
            'id'=>294,
            'titulo'=>'PREBÍTERA',
            'nome'=>'VERÔNICA MORAES MOREIRA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA DE LONDRINA',
            'dnas'=>'1972-04-16 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'6054993-1',
            'cpf'=>NULL,
            'data_filiacao'=>'2008-03-15 00:00:00',
            'data_ordenacao'=>'2002-03-15 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>309,
            'titulo'=>'BISPO',
            'nome'=>'ZEHON GEBBER VAZ',
            'email'=>'przehon@gmail.com',
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA EM SMI',
            'dnas'=>'1981-01-27 00:00:00',
            'naturalde'=>'TELÊMACO BORBA',
            'rg'=>'7.865.346-9 SSP/PR',
            'cpf'=>'036.658.149-01',
            'data_filiacao'=>'2008-02-24 00:00:00',
            'data_ordenacao'=>'2008-02-24 00:00:00',
            'obs'=>'DATA ORDENAÇÃO PARA BISPO - 02/12/2018'
        ] );
        
        Member::create( [
            'id'=>310,
            'titulo'=>'BISPA',
            'nome'=>'VANESSA CRISTIANE ALMEIDA VAZ',
            'email'=>'PRA.VANESSA@GMAIL.COM',
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA EM SMI',
            'dnas'=>'1984-07-01 00:00:00',
            'naturalde'=>'PONTA GROSSA-PR',
            'rg'=>'8.423.199-1 SSP/PR',
            'cpf'=>'006.107.859-07',
            'data_filiacao'=>'2008-02-24 00:00:00',
            'data_ordenacao'=>'2008-02-24 00:00:00',
            'obs'=>'ORDENAÇÃO PARA BISPA EM 02/12/2018'
        ] );
        
        Member::create( [
            'id'=>567,
            'titulo'=>'PASTORA',
            'nome'=>'FABIANA ADALGISA COMUNELLO POSSAMAI DELLA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA EM SMI',
            'dnas'=>'1976-04-17 00:00:00',
            'naturalde'=>'SÃO MIGUEL DO IGUAÇU',
            'rg'=>'73040574',
            'cpf'=>'006.180.489-44',
            'data_filiacao'=>'2018-12-02 00:00:00',
            'data_ordenacao'=>'2018-12-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>568,
            'titulo'=>'PASTOR',
            'nome'=>'FERNANDO POSSAMAI DELLA',
            'email'=>'pr.possama@gmail.com',
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA EM SMI',
            'dnas'=>'1986-06-11 00:00:00',
            'naturalde'=>'MEDIANEIRA',
            'rg'=>'84829528',
            'cpf'=>'048.730.219-28',
            'data_filiacao'=>'2018-12-02 00:00:00',
            'data_ordenacao'=>'2018-12-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>569,
            'titulo'=>'OBREIRO',
            'nome'=>'ANDRÉ LUIZ REIS',
            'email'=>'andre@soluçoescataratas.com',
            'igreja'=>'COMUNIDADE CRISTÃ ÁGUA VIVA EM SMI',
            'dnas'=>'1980-01-13 00:00:00',
            'naturalde'=>'SÃO MIGUEL DO IGUAÇU',
            'rg'=>'68214491',
            'cpf'=>'027.697.649-50',
            'data_filiacao'=>'2018-12-02 00:00:00',
            'data_ordenacao'=>'2018-12-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>13,
            'titulo'=>'BISPO',
            'nome'=>'SERGIO ZILDO DOS SANTOS',
            'email'=>'comunidadeide@sercomtel.com.br',
            'igreja'=>'COMUNIDADE CRISTÃ IDE',
            'dnas'=>'1965-05-21 00:00:00',
            'naturalde'=>'MIRASELVA - PR',
            'rg'=>'3.257.121-2',
            'cpf'=>'522.719.609-59',
            'data_filiacao'=>'1993-07-24 00:00:00',
            'data_ordenacao'=>'1993-07-24 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>14,
            'titulo'=>'BISPA',
            'nome'=>'CINTIA APARECIDA MESQUITA DOS SANTOS',
            'email'=>'cintiamesquitasantos@hotmail.com',
            'igreja'=>'COMUNIDADE CRISTÃ IDE',
            'dnas'=>'1972-01-04 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'4.635.439-7',
            'cpf'=>'869.226.889-53',
            'data_filiacao'=>'1993-07-24 00:00:00',
            'data_ordenacao'=>'1993-07-24 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>270,
            'titulo'=>'PASTORA',
            'nome'=>'ROSANA CRISTINA GARCIA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ IDE',
            'dnas'=>'1974-02-11 00:00:00',
            'naturalde'=>'ARAPONGAS',
            'rg'=>'6.727.019-3',
            'cpf'=>'994.229.809-68',
            'data_filiacao'=>'2007-02-03 00:00:00',
            'data_ordenacao'=>'2007-02-03 00:00:00',
            'obs'=>'05/07/2012 Mudou a igreja de Comunidade Cristã Água Viva para Comunidade Cristã IDE'
        ] );
        
        Member::create( [
            'id'=>434,
            'titulo'=>'PASTOR',
            'nome'=>'VANDERLEI APARECIDO TACANI',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ IDE',
            'dnas'=>'1975-07-13 00:00:00',
            'naturalde'=>'JAPURA - PR',
            'rg'=>'6453572-2 SSP-PR',
            'cpf'=>'953.768.369-91',
            'data_filiacao'=>'2013-05-02 00:00:00',
            'data_ordenacao'=>'2013-05-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>435,
            'titulo'=>'PASTORA',
            'nome'=>'ARIELE MALDONADO MONTEIRO TACONI',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ IDE',
            'dnas'=>'1979-01-04 00:00:00',
            'naturalde'=>'PARANAVAI - PR',
            'rg'=>'6.882.042-1 SSP-PR',
            'cpf'=>'054.910.019-96',
            'data_filiacao'=>'2013-05-02 00:00:00',
            'data_ordenacao'=>'2013-05-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>436,
            'titulo'=>'PASTOR',
            'nome'=>'JOSE CARLOS ONDEI',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ IDE',
            'dnas'=>'1964-10-09 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'3.690758-4',
            'cpf'=>'481.580.709-49',
            'data_filiacao'=>'2013-05-02 00:00:00',
            'data_ordenacao'=>'2013-05-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>437,
            'titulo'=>'PASTORA',
            'nome'=>'GISLAINE INACIO CORRÊA ONDEI',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ IDE',
            'dnas'=>'1971-02-13 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'4.541.366-7 SSP-PR',
            'cpf'=>'645.301.249-91',
            'data_filiacao'=>'2013-05-02 00:00:00',
            'data_ordenacao'=>'2013-05-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>438,
            'titulo'=>'PASTOR',
            'nome'=>'EDGARD OCAMPOS',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ IDE',
            'dnas'=>'1960-04-04 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'3.583.538-5 SSP-PR',
            'cpf'=>'363.653.789-04',
            'data_filiacao'=>'2013-05-02 00:00:00',
            'data_ordenacao'=>'2013-05-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>439,
            'titulo'=>'PASTORA',
            'nome'=>'MARIA DE FATIMA NEGRÃO OCAMPOS',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ IDE',
            'dnas'=>'1965-03-24 00:00:00',
            'naturalde'=>'PORECATU - PR',
            'rg'=>'3.848.698-5',
            'cpf'=>'521.324.639-72',
            'data_filiacao'=>'2013-05-02 00:00:00',
            'data_ordenacao'=>'2013-05-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>440,
            'titulo'=>'PASTOR',
            'nome'=>'JEIR DE SOUZA NOVAIS',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ IDE',
            'dnas'=>'1972-08-26 00:00:00',
            'naturalde'=>'SÃO JORGE DO IVAI - PR',
            'rg'=>'3.510.067-9',
            'cpf'=>'495.977.449-53',
            'data_filiacao'=>'2013-05-02 00:00:00',
            'data_ordenacao'=>'2013-05-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>441,
            'titulo'=>'PASTORA',
            'nome'=>'ROSANA CRISTINA DE ARAÚJO NOVAIS',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ IDE',
            'dnas'=>'1972-08-29 00:00:00',
            'naturalde'=>'JAGUAPITÃ - PR',
            'rg'=>'5.206.194-6 SSP-PR',
            'cpf'=>'003.934.419-38',
            'data_filiacao'=>'2013-05-02 00:00:00',
            'data_ordenacao'=>'2013-05-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>442,
            'titulo'=>'PASTOR',
            'nome'=>'RODRIGO DE OLIVEIRA JOAQUIM',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ IDE',
            'dnas'=>'1982-07-23 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'8.331.466-4 SSP-PR',
            'cpf'=>'042.434.269-37',
            'data_filiacao'=>'2013-05-02 00:00:00',
            'data_ordenacao'=>'2013-05-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>443,
            'titulo'=>'PASTORA',
            'nome'=>'RITA DE CÁSSIA MARTINS CORDEIRO',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ IDE',
            'dnas'=>'1984-01-05 00:00:00',
            'naturalde'=>'LONDRINA PR',
            'rg'=>'876.785-6',
            'cpf'=>'051.539.659-10',
            'data_filiacao'=>'2013-05-02 00:00:00',
            'data_ordenacao'=>'2013-05-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>550,
            'titulo'=>'PASTOR',
            'nome'=>'FELIPE MESQUITA DOS SANTOS',
            'email'=>'comunidadeide@sercomtel.com.br',
            'igreja'=>'COMUNIDADE CRISTÃ IDE',
            'dnas'=>'1995-12-08 00:00:00',
            'naturalde'=>'LONDRINA/PR',
            'rg'=>'12.960.725-4',
            'cpf'=>NULL,
            'data_filiacao'=>'2017-11-05 00:00:00',
            'data_ordenacao'=>'2017-11-05 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>551,
            'titulo'=>'PASTOR',
            'nome'=>'ALFREDO ENRIQUE FERNANDEZ FELDMANN',
            'email'=>'comunidadeide@sercomtel.com.br',
            'igreja'=>'COMUNIDADE CRISTÃ IDE',
            'dnas'=>'1961-11-27 00:00:00',
            'naturalde'=>'PARAGUAY',
            'rg'=>'6.51.290',
            'cpf'=>NULL,
            'data_filiacao'=>'2017-11-05 00:00:00',
            'data_ordenacao'=>'2017-11-05 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>552,
            'titulo'=>'PASTORA',
            'nome'=>'SILVANA REGINA LOUZADA',
            'email'=>'comunidadeide@sercomtel.com.br',
            'igreja'=>'COMUNIDADE CRISTÃ IDE',
            'dnas'=>'1955-11-12 00:00:00',
            'naturalde'=>'ASSIS / SP',
            'rg'=>'1009010974 - RS',
            'cpf'=>'050.723.229-12',
            'data_filiacao'=>'2017-11-05 00:00:00',
            'data_ordenacao'=>'2017-11-05 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>553,
            'titulo'=>'PASTOR',
            'nome'=>'MANOEL PEREIRA LOUZADA',
            'email'=>'comunidadeide@sercomtel.com.br',
            'igreja'=>'COMUNIDADE CRISTÃ IDE',
            'dnas'=>'1945-05-11 00:00:00',
            'naturalde'=>'SÃO PAULO',
            'rg'=>'60042405-6 SS/SP',
            'cpf'=>'363.144.478-87',
            'data_filiacao'=>'2017-11-05 00:00:00',
            'data_ordenacao'=>'2017-11-05 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>367,
            'titulo'=>'PASTORA',
            'nome'=>'CLAUDIA KIDA ZAMPIERI ZEM',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ IDE - PQ OURO BRANCO',
            'dnas'=>'1967-11-21 00:00:00',
            'naturalde'=>'JOAQUIM TAVORA GUAPIRAMA - PR',
            'rg'=>'27.083.773-5 SSPSP',
            'cpf'=>'658.714.059-41',
            'data_filiacao'=>'2010-09-02 00:00:00',
            'data_ordenacao'=>'2010-09-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>71,
            'titulo'=>'PASTORA',
            'nome'=>'LUCI YOSHIE KOGA',
            'email'=>'lucyoshie@hotmail.com',
            'igreja'=>'COMUNIDADE CRISTÃ MENORAH',
            'dnas'=>'1964-12-23 00:00:00',
            'naturalde'=>'MARINGÁ - PR',
            'rg'=>'3.496.039-9',
            'cpf'=>'448.465.179-34',
            'data_filiacao'=>'2003-11-30 00:00:00',
            'data_ordenacao'=>'2003-11-30 00:00:00',
            'obs'=>'Igreja: Rua Distrito Federal, 284 Jd. Novo Horizonte CHÁCARA PAULISTA (próximo do Cemitério Municipal)Cep 87005-100 Culto aos Sábados 18:00h e domingo manhã 10:00h.'
        ] );
        
        Member::create( [
            'id'=>389,
            'titulo'=>'PASTOR',
            'nome'=>'JOSÉ OZINALDO ALVES DE SENA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ MENORAH',
            'dnas'=>'1957-07-23 00:00:00',
            'naturalde'=>'JOÃO PESSOA',
            'rg'=>'5.662.768-5 SSP-PR',
            'cpf'=>'146.461.294-34',
            'data_filiacao'=>'2011-03-22 00:00:00',
            'data_ordenacao'=>'2010-12-04 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>390,
            'titulo'=>'PASTORA',
            'nome'=>'LEILA LOPES LEITE DE SENA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ MENORAH',
            'dnas'=>'1966-10-22 00:00:00',
            'naturalde'=>'MARINGÁ - PR',
            'rg'=>'4.020.549-7',
            'cpf'=>'634.311.579-04',
            'data_filiacao'=>'2011-03-22 00:00:00',
            'data_ordenacao'=>'2010-12-04 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>483,
            'titulo'=>'PASTOR',
            'nome'=>'LUIZ CARLOS POLIDORO PERSIGO',
            'email'=>'miriampolidoro@hotmail.com',
            'igreja'=>'COMUNIDADE CRISTÃ RESTITUIÇÃO',
            'dnas'=>'1946-01-11 00:00:00',
            'naturalde'=>'SANTO ÂNGELO - RS',
            'rg'=>'7.419.421',
            'cpf'=>'001.132.802-97',
            'data_filiacao'=>NULL,
            'data_ordenacao'=>'2007-02-18 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>484,
            'titulo'=>'PASTORA',
            'nome'=>'LORENI NUNES PÉRSIGO',
            'email'=>'miriampolidoro@hotmail.com',
            'igreja'=>'COMUNIDADE CRISTÃ RESTITUIÇÃO',
            'dnas'=>'1952-11-30 00:00:00',
            'naturalde'=>'SANTO ÂNGELO',
            'rg'=>'7.419.446 SSP-SC',
            'cpf'=>'004.810.249-05',
            'data_filiacao'=>NULL,
            'data_ordenacao'=>'2007-02-18 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>541,
            'titulo'=>'PASTORA',
            'nome'=>'LEONORA DE SOUZA BUENO TOGNI',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ RESTITUIÇÃO',
            'dnas'=>'1960-10-02 00:00:00',
            'naturalde'=>'SÃO MIGUEL DO OESTE - SC',
            'rg'=>'1.415.391',
            'cpf'=>'477.326.879-49',
            'data_filiacao'=>'2016-07-20 00:00:00',
            'data_ordenacao'=>'2016-04-03 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>542,
            'titulo'=>'PASTOR',
            'nome'=>'FERNAND OCCEUS',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ RESTITUIÇÃO',
            'dnas'=>'1983-12-05 00:00:00',
            'naturalde'=>'INCHE - HAITI',
            'rg'=>'G207087-7 - CGPI/DIREX/DPF',
            'cpf'=>'701.302.222-59',
            'data_filiacao'=>'2016-07-20 00:00:00',
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>544,
            'titulo'=>'PASTOR',
            'nome'=>'FERDINAND JULUS',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ RESTITUIÇÃO',
            'dnas'=>'1982-06-16 00:00:00',
            'naturalde'=>'BELLADERE',
            'rg'=>'5207861-U',
            'cpf'=>'701.506.782-07',
            'data_filiacao'=>'2015-05-10 00:00:00',
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>540,
            'titulo'=>'PASTOR',
            'nome'=>'AQUILES LUIZ TOGNI',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE CRISTÃ RESTITUIÇÃO',
            'dnas'=>'1958-06-22 00:00:00',
            'naturalde'=>'ENCANTADO - RS',
            'rg'=>'1.652.536',
            'cpf'=>'430.448.409-53',
            'data_filiacao'=>'2016-07-20 00:00:00',
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>530,
            'titulo'=>'PASTOR',
            'nome'=>'EMILIO CARLOS CRYSTAL JUNIOR',
            'email'=>'premiliocarlos@outlook.com',
            'igreja'=>'COMUNIDADE DA FAMÍLIA CASA DE ORAÇÃO',
            'dnas'=>'1966-08-08 00:00:00',
            'naturalde'=>'LIMEIRA / SP',
            'rg'=>'15615861',
            'cpf'=>'067.529.058-94',
            'data_filiacao'=>'2016-06-14 00:00:00',
            'data_ordenacao'=>'2007-01-21 00:00:00',
            'obs'=>'*9º Dígito aos telefones celulares'
        ] );
        
        Member::create( [
            'id'=>556,
            'titulo'=>'PASTORA',
            'nome'=>'PATRICIA DE MATOS LIMA BRUSSOLO',
            'email'=>'patriciaBRUSSULO@HOTMAIL.COM',
            'igreja'=>'COMUNIDADE DA FÉ - ESPAÇO VIDA',
            'dnas'=>'1978-04-13 00:00:00',
            'naturalde'=>'NOVA FÁTIMA - PR',
            'rg'=>'25463252X',
            'cpf'=>'306.959.868-48',
            'data_filiacao'=>'2018-07-02 00:00:00',
            'data_ordenacao'=>'2018-07-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>558,
            'titulo'=>'PASTOR',
            'nome'=>'MÁRCIO ALEXANDRE BRUSSOLO',
            'email'=>'consertec.maquinas@yahoo.com.br',
            'igreja'=>'COMUNIDADE DA FÉ - ESPAÇO VIDA',
            'dnas'=>'1972-04-14 00:00:00',
            'naturalde'=>'ASSIS',
            'rg'=>'34562653',
            'cpf'=>'110.772.958-04',
            'data_filiacao'=>'2018-07-02 00:00:00',
            'data_ordenacao'=>'2018-07-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>545,
            'titulo'=>'PASTOR',
            'nome'=>'WALTER MIRANDA RUIZ COSTA',
            'email'=>'missoeswaltermirandao@hotmail.com',
            'igreja'=>'COMUNIDADE DA FÉ - ESPAÇO VIDA',
            'dnas'=>'1978-06-17 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'7195827-2',
            'cpf'=>'004.057.759-70',
            'data_filiacao'=>'2017-06-20 00:00:00',
            'data_ordenacao'=>'1998-08-10 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>546,
            'titulo'=>'OUTROS',
            'nome'=>'MARLI FERNANDES',
            'email'=>'marlifernandes_71@hotmail.com',
            'igreja'=>'COMUNIDADE DA FÉ - ESPAÇO VIDA',
            'dnas'=>'1973-12-03 00:00:00',
            'naturalde'=>'FOZ DO IGUAÇU',
            'rg'=>'6704256-5 SESP',
            'cpf'=>'931.151.569-87',
            'data_filiacao'=>'2017-06-20 00:00:00',
            'data_ordenacao'=>'2015-02-10 00:00:00',
            'obs'=>'MISSIONÁRIA'
        ] );
        
        Member::create( [
            'id'=>216,
            'titulo'=>'PASTOR',
            'nome'=>'PÉRICLES FERREIRA CÔRTES',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE EM IVAIPORÃ',
            'dnas'=>'1961-05-10 00:00:00',
            'naturalde'=>'JAGUAPITÃ - PR',
            'rg'=>'86.870',
            'cpf'=>'442.420.429-49',
            'data_filiacao'=>'1991-07-27 00:00:00',
            'data_ordenacao'=>'1990-07-01 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>217,
            'titulo'=>'PASTORA',
            'nome'=>'LÚCIA HELENA BARROS CÔRTES',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE EM IVAIPORÃ',
            'dnas'=>'1964-02-28 00:00:00',
            'naturalde'=>'PETROPOLIS - RJ',
            'rg'=>'06.288.684-1',
            'cpf'=>'019.621.937-05',
            'data_filiacao'=>'1991-07-27 00:00:00',
            'data_ordenacao'=>'1991-07-28 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>487,
            'titulo'=>'PASTORA',
            'nome'=>'RICELLI ESPINDOLA SANTA CRUZ',
            'email'=>'ricellisantacruz@hotmail.com',
            'igreja'=>'COMUNIDADE EVANGÉLICA ADONAI SHALOM',
            'dnas'=>'1974-09-02 00:00:00',
            'naturalde'=>'AMAMBAI - MS',
            'rg'=>'001.070.048 SSPMS',
            'cpf'=>'876.144.211-91',
            'data_filiacao'=>'2015-02-15 00:00:00',
            'data_ordenacao'=>'2010-10-11 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>489,
            'titulo'=>'PASTOR',
            'nome'=>'MARCIANO LUIZ VIEIRA',
            'email'=>'marcianoluiz12@hotmail.com',
            'igreja'=>'COMUNIDADE EVANGÉLICA ADONAI SHALOM',
            'dnas'=>'1982-03-11 00:00:00',
            'naturalde'=>'AMAMBAI - MS',
            'rg'=>'001124120 SSP-MS',
            'cpf'=>'952.551.411-00',
            'data_filiacao'=>'2015-02-14 00:00:00',
            'data_ordenacao'=>'2015-02-15 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>490,
            'titulo'=>'PASTORA',
            'nome'=>'CLAUDIENE AMARAL DA COSTA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE EVANGÉLICA ADONAI SHALOM',
            'dnas'=>'1983-10-08 00:00:00',
            'naturalde'=>NULL,
            'rg'=>NULL,
            'cpf'=>'963.320.001-63',
            'data_filiacao'=>'2015-02-15 00:00:00',
            'data_ordenacao'=>'2015-02-15 00:00:00',
            'obs'=>'Não foi feita a ID Ministerial porque não tem o numero de RG'
        ] );
        
        Member::create( [
            'id'=>492,
            'titulo'=>'PASTOR',
            'nome'=>'EURIPES CHARRÃO BARBOSA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE EVANGÉLICA ADONAI SHALOM',
            'dnas'=>'1967-02-24 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'199.677 SSP-MS',
            'cpf'=>'372.518.561-15',
            'data_filiacao'=>'2015-02-15 00:00:00',
            'data_ordenacao'=>'2011-12-01 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>493,
            'titulo'=>'PASTORA',
            'nome'=>'EZENIR DE OLIVEIRA BARBOSA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE EVANGÉLICA ADONAI SHALOM',
            'dnas'=>'1963-08-13 00:00:00',
            'naturalde'=>'AMAMBAI - MS',
            'rg'=>'154793',
            'cpf'=>'201.640.501-59',
            'data_filiacao'=>'2015-02-15 00:00:00',
            'data_ordenacao'=>'2015-02-15 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>517,
            'titulo'=>'BISPA',
            'nome'=>'PATRICIA RAMOS DE BARROS CHAVES',
            'email'=>'adonaishalom.ceas@hotmail.com',
            'igreja'=>'COMUNIDADE EVANGÉLICA ADONAI SHALOM',
            'dnas'=>'1979-09-10 00:00:00',
            'naturalde'=>'MARINGA',
            'rg'=>'7.011.690-1',
            'cpf'=>'954.907.281-91',
            'data_filiacao'=>'2015-12-21 00:00:00',
            'data_ordenacao'=>'2015-02-14 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>522,
            'titulo'=>'OBREIRO',
            'nome'=>'CLAUDINE AMARAL DA COSTA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE EVANGÉLICA ADONAI SHALOM',
            'dnas'=>'1983-10-08 00:00:00',
            'naturalde'=>NULL,
            'rg'=>NULL,
            'cpf'=>NULL,
            'data_filiacao'=>NULL,
            'data_ordenacao'=>'2015-02-15 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>509,
            'titulo'=>'PASTOR',
            'nome'=>'JOHN PETER AGUIERRE FERNANDES',
            'email'=>'peter_lwart@hotmail.com',
            'igreja'=>'COMUNIDADE EVANGÉLICA ADONAI SHALOM',
            'dnas'=>'1979-01-09 00:00:00',
            'naturalde'=>'CAMPO GRANDE - MS',
            'rg'=>'844354 SSPMS',
            'cpf'=>'631.699.631-91',
            'data_filiacao'=>'2015-02-16 00:00:00',
            'data_ordenacao'=>'2014-06-14 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>510,
            'titulo'=>'PASTORA',
            'nome'=>'KELLI APARECIDA FERNANDES',
            'email'=>'kelliapfernandes@hotmail.com',
            'igreja'=>'COMUNIDADE EVANGÉLICA ADONAI SHALOM',
            'dnas'=>'1980-01-31 00:00:00',
            'naturalde'=>'CAMPO GRANDE - MS',
            'rg'=>'987573 SPMS',
            'cpf'=>'716.464.691-00',
            'data_filiacao'=>'2015-02-15 00:00:00',
            'data_ordenacao'=>'2014-06-19 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>494,
            'titulo'=>'PASTOR',
            'nome'=>'JEAN MARCELO VILLAGRA GOMES',
            'email'=>'marcelogomesje@hotmail.com',
            'igreja'=>'COMUNIDADE EVANGÉLICA ADONAI SHALOM',
            'dnas'=>NULL,
            'naturalde'=>'PORTO MURTINHO - MS',
            'rg'=>'379795 SSP-MS',
            'cpf'=>'404.839.671-49',
            'data_filiacao'=>'2015-02-16 00:00:00',
            'data_ordenacao'=>'2014-11-23 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>505,
            'titulo'=>'PASTORA',
            'nome'=>'EULALIA DE OLIVEIRA LIMA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE EVANGÉLICA ADONAI SHALOM',
            'dnas'=>'1965-09-22 00:00:00',
            'naturalde'=>'ITAIPORÃ - MS',
            'rg'=>'302.906',
            'cpf'=>'365.698.691-00',
            'data_filiacao'=>'2015-08-15 00:00:00',
            'data_ordenacao'=>'2008-10-10 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>453,
            'titulo'=>'PASTOR',
            'nome'=>'IVANETE JULIO DE CARVALHO',
            'email'=>'netecontroll@hotmail.com',
            'igreja'=>'COMUNIDADE EVANGÉLICA ADONAI SHALOM',
            'dnas'=>'1970-12-04 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'5.271.180-0 SSP-PR',
            'cpf'=>'756.080.229-04',
            'data_filiacao'=>'2013-09-07 00:00:00',
            'data_ordenacao'=>'2013-09-01 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>503,
            'titulo'=>'PASTORA',
            'nome'=>'LUCILENE ROSIMARY ATANAZIO',
            'email'=>'familia_otanazio@hotmail.com',
            'igreja'=>'COMUNIDADE EVANGÉLICA ADONAI SHALOM',
            'dnas'=>'1973-03-30 00:00:00',
            'naturalde'=>'LONDDRINA-PR',
            'rg'=>'6.100.753-9 SSPPR',
            'cpf'=>'852.231.589-20',
            'data_filiacao'=>'2015-02-15 00:00:00',
            'data_ordenacao'=>'2010-09-07 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>504,
            'titulo'=>'PASTOR',
            'nome'=>'GELSON ARES ATANAZIO',
            'email'=>'familia_atanazio@hotmail.com',
            'igreja'=>'COMUNIDADE EVANGÉLICA ADONAI SHALOM',
            'dnas'=>'1970-07-09 00:00:00',
            'naturalde'=>'STA. CECÍLIA DO PAVÃO - PR',
            'rg'=>'4939137-4 SSPPR',
            'cpf'=>'687.728.409-78',
            'data_filiacao'=>'2015-02-15 00:00:00',
            'data_ordenacao'=>'2015-02-15 00:00:00',
            'obs'=>'Não tinha data de ordenção. Inserida a de filiação.'
        ] );
        
        Member::create( [
            'id'=>506,
            'titulo'=>'PASTOR',
            'nome'=>'CLAUDINEI DEZANETTI',
            'email'=>'officecontabil@hotmail.com',
            'igreja'=>'COMUNIDADE EVANGÉLICA ADONAI SHALOM',
            'dnas'=>'1970-07-29 00:00:00',
            'naturalde'=>'LUNARDELI - PR',
            'rg'=>'53380387 SSPPR',
            'cpf'=>'604.523.749-87',
            'data_filiacao'=>'2015-02-15 00:00:00',
            'data_ordenacao'=>'2013-08-08 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>507,
            'titulo'=>'PASTORA',
            'nome'=>'TANIA RAMOS DEZANETTI',
            'email'=>'afficecontabil@hotmail.com',
            'igreja'=>'COMUNIDADE EVANGÉLICA ADONAI SHALOM',
            'dnas'=>'1974-11-29 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'7.832.223-3 SSPPR',
            'cpf'=>'834.351.239-15',
            'data_filiacao'=>'2015-02-15 00:00:00',
            'data_ordenacao'=>'2013-09-08 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>229,
            'titulo'=>'BISPO',
            'nome'=>'ROBSON FRANCISCO CHAVES',
            'email'=>'adonaishalon.ceas@hotmail.com',
            'igreja'=>'COMUNIDADE EVANGÉLICA ADONAI SHALON',
            'dnas'=>'1975-05-07 00:00:00',
            'naturalde'=>'LONDRINA',
            'rg'=>'6767509-6',
            'cpf'=>'810.496.929-34',
            'data_filiacao'=>'2015-02-15 00:00:00',
            'data_ordenacao'=>'1998-04-01 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>35,
            'titulo'=>'PASTORA',
            'nome'=>'SHIRLEI TOLEDO GARCIA DE OLIVEIRA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE EVANGÉLICA ADONAI SHALON',
            'dnas'=>'1970-12-10 00:00:00',
            'naturalde'=>'SÃO PAULO',
            'rg'=>'7.982.621-0',
            'cpf'=>'519.027.101-34',
            'data_filiacao'=>'2003-02-22 00:00:00',
            'data_ordenacao'=>'2003-02-22 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>168,
            'titulo'=>'PASTOR',
            'nome'=>'JUSSELMO SÉRGIO CARLOS DE FREITAS',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE EVANGÉLICA ADONAI SHALON',
            'dnas'=>'1968-10-05 00:00:00',
            'naturalde'=>'NOVA ESPERANÇA - PR',
            'rg'=>'436.725',
            'cpf'=>'436.734.901-25',
            'data_filiacao'=>'2004-10-30 00:00:00',
            'data_ordenacao'=>'2002-03-17 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>266,
            'titulo'=>'PASTORA',
            'nome'=>'ROSANA DE CASTRO V. DE FREITAS',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE EVANGÉLICA ADONAI SHALON',
            'dnas'=>'1971-12-15 00:00:00',
            'naturalde'=>'DOURADOS',
            'rg'=>'000629003',
            'cpf'=>'557.432.771-68',
            'data_filiacao'=>'2006-06-03 00:00:00',
            'data_ordenacao'=>'2006-06-03 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>106,
            'titulo'=>'PASTOR',
            'nome'=>'CARLOS DE OLIVEIRA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE EVANGÉLICA ADONAI SHALON',
            'dnas'=>NULL,
            'naturalde'=>NULL,
            'rg'=>NULL,
            'cpf'=>NULL,
            'data_filiacao'=>NULL,
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>451,
            'titulo'=>'PASTOR',
            'nome'=>'JOÃO LUIZ MACHADO DE CARVALHO',
            'email'=>'joaocontroll@hotmail.com',
            'igreja'=>'COMUNIDADE EVANGÉLICA ADONAI SHALON',
            'dnas'=>'2964-03-28 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'3.245.342-2',
            'cpf'=>'365.975.709-87',
            'data_filiacao'=>'2013-09-07 00:00:00',
            'data_ordenacao'=>'2013-09-01 00:00:00',
            'obs'=>'Escritório: 3347-6614'
        ] );
        
        Member::create( [
            'id'=>143,
            'titulo'=>'PASTOR',
            'nome'=>'HAILTON ARAÚJO',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE EVANGÉLICA CAMINHO VIVO',
            'dnas'=>NULL,
            'naturalde'=>NULL,
            'rg'=>'1.645.405',
            'cpf'=>NULL,
            'data_filiacao'=>'2002-03-01 00:00:00',
            'data_ordenacao'=>'2002-03-01 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>395,
            'titulo'=>'PASTOR',
            'nome'=>'NELSON ALVES RODRIGUES',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE EVANGÉLICA DA ALVA',
            'dnas'=>'1953-10-27 00:00:00',
            'naturalde'=>'CENTENÁRIO DO SUL',
            'rg'=>'998.604-9 SESP',
            'cpf'=>'756.112.289-68',
            'data_filiacao'=>'1992-07-26 00:00:00',
            'data_ordenacao'=>'1992-07-26 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>534,
            'titulo'=>'PASTOR',
            'nome'=>'ROMULO CORDEIRO CARVALHO',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE EVANGÉLICA DE PARAGUAÇU PAULISTA',
            'dnas'=>'1968-10-24 00:00:00',
            'naturalde'=>'FRONTEIRA DOS VALES - MG',
            'rg'=>'27.897.189-1',
            'cpf'=>'131.094.268-46',
            'data_filiacao'=>'2008-12-28 00:00:00',
            'data_ordenacao'=>'1992-04-21 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>566,
            'titulo'=>'PASTOR',
            'nome'=>'EDUARDO XAVIER DE BARROS',
            'email'=>'ex.barros@bol.com.br',
            'igreja'=>'COMUNIDADE EVANGÉLICA EM IVAIPORÃ',
            'dnas'=>'1955-09-10 00:00:00',
            'naturalde'=>'PETRÓPOLIS - RJ',
            'rg'=>'890063993',
            'cpf'=>'476.630.307-53',
            'data_filiacao'=>'2018-12-16 00:00:00',
            'data_ordenacao'=>'2018-12-16 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>513,
            'titulo'=>'PASTOR',
            'nome'=>'ELCIO YOSHIKI NONACA',
            'email'=>'elciononaca@hotmail.com',
            'igreja'=>'COMUNIDADE EVANGELICA FILADELFIA',
            'dnas'=>'1971-06-25 00:00:00',
            'naturalde'=>'SANTA FÉ - PR',
            'rg'=>'44889552',
            'cpf'=>'730.755.239-68',
            'data_filiacao'=>'2015-06-20 00:00:00',
            'data_ordenacao'=>'2015-06-20 00:00:00',
            'obs'=>'END. DA IGREJA - Av. J.K, 3622 Vila Ipiranga cep. 86010-560 Londrina-PR'
        ] );
        
        Member::create( [
            'id'=>467,
            'titulo'=>'PASTORA',
            'nome'=>'MARIA HELLIER RIBEIRO NONACA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE EVANGÉLICA FILADÉLFIA',
            'dnas'=>'1970-03-04 00:00:00',
            'naturalde'=>'RIO GRANDE - RS',
            'rg'=>'4.777.217-6',
            'cpf'=>'774.557.629-68',
            'data_filiacao'=>'2015-01-25 00:00:00',
            'data_ordenacao'=>'2015-07-30 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>543,
            'titulo'=>'PASTORA',
            'nome'=>'NEUCI LOURDES DE SOUZA',
            'email'=>'neuciipr@hotmail.com',
            'igreja'=>'COMUNIDADE EVANGÉLICA FILADÉLFIA DE LONDRINA',
            'dnas'=>'1961-06-15 00:00:00',
            'naturalde'=>'SÃO PEDRO DO IVAÍ - PR',
            'rg'=>'13-785-692 - SSP-SP',
            'cpf'=>NULL,
            'data_filiacao'=>'2015-06-20 00:00:00',
            'data_ordenacao'=>'2010-05-03 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>37,
            'titulo'=>'BISPA',
            'nome'=>'ANA CLÉLIA MARINHO OLIVEIRA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE EVANGÉLICA VASO DE VIDA',
            'dnas'=>'1964-01-29 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'123.807 SSPTO',
            'cpf'=>'360.611.311-00',
            'data_filiacao'=>'2006-02-26 00:00:00',
            'data_ordenacao'=>'2018-06-15 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>80,
            'titulo'=>'BISPO',
            'nome'=>'RENATO ALVES',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE EVANGÉLICA VASO DE VIDA',
            'dnas'=>'1969-11-09 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'308.152 SSPTO',
            'cpf'=>'201.592.771-91',
            'data_filiacao'=>'2006-02-26 00:00:00',
            'data_ordenacao'=>'2018-06-15 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>486,
            'titulo'=>'PASTORA',
            'nome'=>'SÉRGIO ROSA RODRIGUES',
            'email'=>'pr-sergiorodrigues@hotmail.com',
            'igreja'=>'COMUNIDADE EVANGLICAS ADONAI SHALON',
            'dnas'=>'1974-09-02 00:00:00',
            'naturalde'=>'AMABAI - MS',
            'rg'=>'000864908 SSP-MS',
            'cpf'=>'541.051.701-63',
            'data_filiacao'=>'2015-02-14 00:00:00',
            'data_ordenacao'=>'2010-10-11 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>404,
            'titulo'=>'BISPO',
            'nome'=>'UBIRAJARA FERREIRA COUTINHO',
            'email'=>'ufcoutinho@gmail.com',
            'igreja'=>'COMUNIDADE GRAÇA ABUNDANTE',
            'dnas'=>'1951-08-26 00:00:00',
            'naturalde'=>'CENTENÁRIO DO SUL - PR',
            'rg'=>'942.738-4',
            'cpf'=>'060.803.839-34',
            'data_filiacao'=>NULL,
            'data_ordenacao'=>'1995-10-01 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>405,
            'titulo'=>'BISPA',
            'nome'=>'LÚCIA MARIA VITTURI COUTINHO',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE GRAÇA ABUNDANTE',
            'dnas'=>'1953-06-30 00:00:00',
            'naturalde'=>'BELA VISTA DO PARAÍSO - PR',
            'rg'=>'203.385-8 SSP-PR',
            'cpf'=>'841.167.819-91',
            'data_filiacao'=>NULL,
            'data_ordenacao'=>'2005-07-01 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>427,
            'titulo'=>'PASTORA',
            'nome'=>'MARILLAC APARECIDA MARTINS DE AMORIM ANDRADE',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE GRAÇA ABUNDANTE',
            'dnas'=>'1961-12-17 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'3.116.535-0 SSP-PR',
            'cpf'=>'539.799.909-15',
            'data_filiacao'=>'2011-12-30 00:00:00',
            'data_ordenacao'=>'2011-03-06 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>382,
            'titulo'=>'PASTOR',
            'nome'=>'EMERSON SILVA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE MISSIONÁRIA FILADELFIA',
            'dnas'=>'1973-11-27 00:00:00',
            'naturalde'=>'SANTO ANDRÉ - SP',
            'rg'=>'24.112.775-0 SSP-SP',
            'cpf'=>'163.600.278-10',
            'data_filiacao'=>'2011-03-22 00:00:00',
            'data_ordenacao'=>'2011-04-09 00:00:00',
            'obs'=>'Templo: Av. Marechal Cordeiro de Farias, 120'
        ] );
        
        Member::create( [
            'id'=>383,
            'titulo'=>'PASTORA',
            'nome'=>'ALDILENE ROSA DA SILVA',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE MISSIONÁRIA FILADELFIA',
            'dnas'=>'1978-05-29 00:00:00',
            'naturalde'=>'MONTE SIAO - MG',
            'rg'=>'30.184.888-9 SSP-SP',
            'cpf'=>'290.768.828-41',
            'data_filiacao'=>'2011-03-22 00:00:00',
            'data_ordenacao'=>'2011-04-09 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>230,
            'titulo'=>'PASTOR',
            'nome'=>'RODRIGO FABIANO SELAU',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE NOVA VIDA',
            'dnas'=>'1976-10-17 00:00:00',
            'naturalde'=>'CAMBARÁ DO SUL - RS',
            'rg'=>'10.646.869-32',
            'cpf'=>'732.192.230-87',
            'data_filiacao'=>'2004-02-17 00:00:00',
            'data_ordenacao'=>'2004-12-12 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>128,
            'titulo'=>'PASTORA',
            'nome'=>'MÁRCIA DE PAIVA LUZ',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE RHEMA',
            'dnas'=>'1969-04-13 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'4.273.210-9',
            'cpf'=>'545.608.379-53',
            'data_filiacao'=>'2001-08-26 00:00:00',
            'data_ordenacao'=>'2000-11-17 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>70,
            'titulo'=>'Pastora',
            'nome'=>'TÂNIA MARIA BRESSAN MÜHLBEIER',
            'email'=>NULL,
            'igreja'=>'COMUNIDADE UNIDOS EM CRISTO',
            'dnas'=>'1957-02-08 00:00:00',
            'naturalde'=>'TUBARÃO - SC',
            'rg'=>'3.615.699-6',
            'cpf'=>'344.656.269-91',
            'data_filiacao'=>'2000-09-18 00:00:00',
            'data_ordenacao'=>'1999-07-01 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>262,
            'titulo'=>'PASTOR',
            'nome'=>'ZINALDO MARTINS',
            'email'=>'zinaldomartins@hotmail.com',
            'igreja'=>'COMUNIDADE VIDA NOVA',
            'dnas'=>'1958-07-24 00:00:00',
            'naturalde'=>'MARIALVA - PR',
            'rg'=>'24.415.582-3',
            'cpf'=>'362.845.999-00',
            'data_filiacao'=>'1987-07-22 00:00:00',
            'data_ordenacao'=>'1982-01-14 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>295,
            'titulo'=>'PASTORA',
            'nome'=>'SEILA CRISTINA FRANCHI BARBOSA',
            'email'=>NULL,
            'igreja'=>'COUNIDADE CRISTÃ ÁGUA VIVA',
            'dnas'=>'1970-01-15 00:00:00',
            'naturalde'=>'PRIMEIRO DE MAIO - PR',
            'rg'=>'4553856-7',
            'cpf'=>'937.471.209-68',
            'data_filiacao'=>'2008-03-15 00:00:00',
            'data_ordenacao'=>'2006-09-22 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>198,
            'titulo'=>'APÓSTOLO',
            'nome'=>'NELSON BRAIDO',
            'email'=>NULL,
            'igreja'=>'CRISTÃ PRESBITERIANA',
            'dnas'=>'1952-05-21 00:00:00',
            'naturalde'=>'CAPIVARÍ - SP',
            'rg'=>'1.242.609',
            'cpf'=>'173.498.699-91',
            'data_filiacao'=>'1992-12-29 00:00:00',
            'data_ordenacao'=>'1975-01-05 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>488,
            'titulo'=>'PASTORA',
            'nome'=>'ROSILENE DE BARROS SOUZA',
            'email'=>'sidneyroial@hotmail.com',
            'igreja'=>'EJ. BETEL CASA DE DEUS',
            'dnas'=>'1974-04-09 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'147.532 SSP-MS',
            'cpf'=>'793.359.851-04',
            'data_filiacao'=>'2015-10-16 00:00:00',
            'data_ordenacao'=>'2011-06-13 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>431,
            'titulo'=>'BISPO',
            'nome'=>'ARNALDO CARDOSO ALVES',
            'email'=>NULL,
            'igreja'=>'EU QUERO É DEUS A IGREJA DE JESUS',
            'dnas'=>'1973-09-28 00:00:00',
            'naturalde'=>'SOA JOSE DO JACARI- MG',
            'rg'=>'MG-5.095.049',
            'cpf'=>'635.415.566-68',
            'data_filiacao'=>NULL,
            'data_ordenacao'=>'1997-11-17 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>142,
            'titulo'=>'PASTOR',
            'nome'=>'GIEZI MARQUES DE AZEVEDO',
            'email'=>NULL,
            'igreja'=>'FEDERAÇÃO DE IGREJAS EVANGÉLICAS LOCAIS',
            'dnas'=>'1947-02-03 00:00:00',
            'naturalde'=>'CONSELHEIRO PENA - MG',
            'rg'=>'840.443-7',
            'cpf'=>'205.670.309-20',
            'data_filiacao'=>'2001-06-30 00:00:00',
            'data_ordenacao'=>'1972-02-01 00:00:00',
            'obs'=>'Trocou: COMUNIDADE EVANGÉLICA DE MARINGÁ por: FEDERAÇÃO DE IGREJAS EVANGÉLICAS LOCAIS em 13/12/2013'
        ] );
        
        Member::create( [
            'id'=>304,
            'titulo'=>'PASTOR',
            'nome'=>'EDIVALDO REIS DA SILVA',
            'email'=>'edivaldo.reis61@hotmail.com',
            'igreja'=>'FIEL',
            'dnas'=>'1961-06-02 00:00:00',
            'naturalde'=>'SÃO PAULO',
            'rg'=>'3.212.983-8',
            'cpf'=>'481.134.099-04',
            'data_filiacao'=>'2008-06-21 00:00:00',
            'data_ordenacao'=>'2008-06-21 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>454,
            'titulo'=>'PASTORA',
            'nome'=>'ROSELI GOMES DE SOUZA SILVA',
            'email'=>NULL,
            'igreja'=>'FIEL',
            'dnas'=>'1965-03-29 00:00:00',
            'naturalde'=>'LONDRINA',
            'rg'=>'3.326.116-0 SSP-PR',
            'cpf'=>'454.340.429-72',
            'data_filiacao'=>'2014-04-08 00:00:00',
            'data_ordenacao'=>'2011-08-20 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>192,
            'titulo'=>'PASTORA',
            'nome'=>'MARLENE DE FÁTIMA LIMA',
            'email'=>'pramarlene.igreja@gmail.com',
            'igreja'=>'FIEL',
            'dnas'=>'1964-06-18 00:00:00',
            'naturalde'=>'MANTENÓPOLIS - PR',
            'rg'=>'4.807.516-9',
            'cpf'=>'589.216.68',
            'data_filiacao'=>'2003-02-23 00:00:00',
            'data_ordenacao'=>'2007-11-15 00:00:00',
            'obs'=>'MUDADA DE EVANGELISTA PARA MISSIONÁRIA EM 14/11/2007 Mudou para igreja de Sagradas MIssões para FIel em 26/11/2013'
        ] );
        
        Member::create( [
            'id'=>107,
            'titulo'=>'PASTOR',
            'nome'=>'CELSO MARTINS LOPES',
            'email'=>NULL,
            'igreja'=>'GERAÇÃO ELEITA',
            'dnas'=>'1954-12-25 00:00:00',
            'naturalde'=>'IEPE - SP',
            'rg'=>'333.511',
            'cpf'=>'730.826.199-19',
            'data_filiacao'=>'1998-12-14 00:00:00',
            'data_ordenacao'=>'1997-12-15 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>348,
            'titulo'=>'PASTORA',
            'nome'=>'CELINA MARQUETI DA SILVA LEITE',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1944-11-07 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'6905621',
            'cpf'=>'164.538.188-92',
            'data_filiacao'=>'2010-04-02 00:00:00',
            'data_ordenacao'=>'2009-12-19 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>349,
            'titulo'=>'PASTORA',
            'nome'=>'ROSIANE DA SILVA LEITE BECHELI',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1978-04-05 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'25352491-X',
            'cpf'=>'264.770.498-80',
            'data_filiacao'=>'2010-04-02 00:00:00',
            'data_ordenacao'=>'2009-12-19 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>231,
            'titulo'=>'PASTORA',
            'nome'=>'VIRGÍNIA MARTINS OLIVEIRA SELAU',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1982-06-18 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'6.904.325-9',
            'cpf'=>'036.032.909-84',
            'data_filiacao'=>'2003-12-31 00:00:00',
            'data_ordenacao'=>'2004-12-12 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>174,
            'titulo'=>'PASTOR',
            'nome'=>'LUIS CARLOS TELES',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1970-04-13 00:00:00',
            'naturalde'=>'NOVA ESPERANÇA - PR',
            'rg'=>'5.385.538-5',
            'cpf'=>'765.916.119-91',
            'data_filiacao'=>'2004-12-12 00:00:00',
            'data_ordenacao'=>'2004-12-12 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>175,
            'titulo'=>'PASTORA',
            'nome'=>'REGINA MARIA RAMOS TELES',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1974-02-03 00:00:00',
            'naturalde'=>'MARINGÁ - PR',
            'rg'=>'6.338.047-4',
            'cpf'=>'042.347.069-81',
            'data_filiacao'=>'2004-12-12 00:00:00',
            'data_ordenacao'=>'2004-12-12 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>247,
            'titulo'=>'EVANGELISTA',
            'nome'=>'SONIA REGINA FIGUEIROBÁ',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1966-08-26 00:00:00',
            'naturalde'=>'CORNÉLIO PROCÓPIO',
            'rg'=>'9.065.319-9',
            'cpf'=>'978.949.749-00',
            'data_filiacao'=>'2004-12-12 00:00:00',
            'data_ordenacao'=>'2004-12-12 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>190,
            'titulo'=>'EVANGELISTA',
            'nome'=>'MÁRIO ROBERTO WAINER',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1973-05-25 00:00:00',
            'naturalde'=>'GUARAPUAVA',
            'rg'=>'6.227.562-6',
            'cpf'=>'905.858.609-04',
            'data_filiacao'=>'2004-12-12 00:00:00',
            'data_ordenacao'=>'2004-12-12 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>191,
            'titulo'=>'EVANGELISTA',
            'nome'=>'ANGELITA CARDOSO DA SILVA WAINER',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1969-11-25 00:00:00',
            'naturalde'=>'BANDEIRANTES - PR',
            'rg'=>'4.604.636-6',
            'cpf'=>'638.723.239-20',
            'data_filiacao'=>'2004-12-12 00:00:00',
            'data_ordenacao'=>'2004-12-12 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>97,
            'titulo'=>'EVANGELISTA',
            'nome'=>'DOLORES QUIRINO PINTO',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1964-11-10 00:00:00',
            'naturalde'=>'FAXINAL - PR',
            'rg'=>'6.890.477-3',
            'cpf'=>'015.907.069-43',
            'data_filiacao'=>'2005-12-18 00:00:00',
            'data_ordenacao'=>'2005-12-18 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>136,
            'titulo'=>'PASTOR',
            'nome'=>'GEAN ANDRÉ ARAÚJO DE SOUZA',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1977-05-07 00:00:00',
            'naturalde'=>'SÃO MIGUEL DO ARAGUAÇU - MG',
            'rg'=>'2.132.762',
            'cpf'=>'194746628-35',
            'data_filiacao'=>'2004-12-12 00:00:00',
            'data_ordenacao'=>'1994-04-13 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>137,
            'titulo'=>'PASTORA',
            'nome'=>'MARIA ANDRÉIA SEVERIANO DE SOUZA',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1977-05-07 00:00:00',
            'naturalde'=>'MANDAGUAÇÚ - PR',
            'rg'=>'9.381.151-8',
            'cpf'=>'043.948.229-12',
            'data_filiacao'=>'2004-12-12 00:00:00',
            'data_ordenacao'=>'1994-04-13 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>42,
            'titulo'=>'BISPO',
            'nome'=>'MÁRCIO LUIZ BUENO PAOLIELO',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1962-08-25 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'16.969',
            'cpf'=>'514.296.679-15',
            'data_filiacao'=>'2000-12-16 00:00:00',
            'data_ordenacao'=>'2000-12-16 00:00:00',
            'obs'=>'Ordenado a Bispo (Alterado em 14/12/2007)'
        ] );
        
        Member::create( [
            'id'=>43,
            'titulo'=>'PASTORA',
            'nome'=>'RIVA CARDOSO PAOLIELO',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1965-07-27 00:00:00',
            'naturalde'=>'SANTOS - SP',
            'rg'=>'3.617.288-6',
            'cpf'=>'538.643.289-34',
            'data_filiacao'=>'2000-12-16 00:00:00',
            'data_ordenacao'=>'2000-12-16 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>48,
            'titulo'=>'PASTOR',
            'nome'=>'ADEMIR DA SILVA',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1954-08-10 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'1.179.216-2',
            'cpf'=>'238.499.249-04',
            'data_filiacao'=>NULL,
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>49,
            'titulo'=>'PASTORA',
            'nome'=>'EDNA RAMOS DA SILVA',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1955-10-24 00:00:00',
            'naturalde'=>'ALVORADA DO SUL',
            'rg'=>'3.795.919-7',
            'cpf'=>'041.132.319-90',
            'data_filiacao'=>NULL,
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>52,
            'titulo'=>'PASTOR',
            'nome'=>'APARECIDO DURÃES',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1958-05-22 00:00:00',
            'naturalde'=>'LONDRINA',
            'rg'=>'1.879.945',
            'cpf'=>'349.012.809-53',
            'data_filiacao'=>'2000-12-12 00:00:00',
            'data_ordenacao'=>'2000-12-16 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>53,
            'titulo'=>'PASTOR',
            'nome'=>'CLAÚDIO ROBERTO GIBRIN',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1969-11-20 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'1.487.709-6',
            'cpf'=>'365.532.989-04',
            'data_filiacao'=>NULL,
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>55,
            'titulo'=>'PASTOR',
            'nome'=>'WILLIAN DOS SANTOS',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1982-08-01 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'8.176.523-5',
            'cpf'=>'036.657.819-73',
            'data_filiacao'=>'2005-12-12 00:00:00',
            'data_ordenacao'=>'2005-12-12 00:00:00',
            'obs'=>' '
        ] );
        
        Member::create( [
            'id'=>56,
            'titulo'=>'PASTORA',
            'nome'=>'DIRCE VICENTE DOS SANTOS',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1982-09-22 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'8.251.098-2',
            'cpf'=>'043.597.649-44',
            'data_filiacao'=>'2005-12-12 00:00:00',
            'data_ordenacao'=>'2005-12-12 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>57,
            'titulo'=>'PASTOR',
            'nome'=>'FRANCISCO AKAICHI',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1961-09-07 00:00:00',
            'naturalde'=>'CURITIBA - PR',
            'rg'=>'3.126.271-2',
            'cpf'=>'360.628.809-30',
            'data_filiacao'=>'2005-12-18 00:00:00',
            'data_ordenacao'=>'2005-12-18 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>58,
            'titulo'=>'PASTORA',
            'nome'=>'SUELY APARECIDA AKAICHI',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1967-02-11 00:00:00',
            'naturalde'=>'QUINTA DO SOL - PR',
            'rg'=>'4.592.540-4',
            'cpf'=>'550.239.169-87',
            'data_filiacao'=>'2005-12-18 00:00:00',
            'data_ordenacao'=>'2005-12-18 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>59,
            'titulo'=>'EVANGELISTA',
            'nome'=>'HELIO TURQUINO',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1935-09-30 00:00:00',
            'naturalde'=>'CAMBARÁ - PR',
            'rg'=>'287.516',
            'cpf'=>'004.828.389-49',
            'data_filiacao'=>'2005-12-18 00:00:00',
            'data_ordenacao'=>'2005-12-18 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>60,
            'titulo'=>'EVANGELISTA',
            'nome'=>'ROSIMARI FARIAS DA COSTA PINTO',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1961-02-25 00:00:00',
            'naturalde'=>'N. S. DAS GRAÇAS - PR',
            'rg'=>'3.665.972-6',
            'cpf'=>'363.358.869-87',
            'data_filiacao'=>'2004-12-12 00:00:00',
            'data_ordenacao'=>'2004-12-12 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>85,
            'titulo'=>'PASTORA',
            'nome'=>'ALAYDE CANELLI E SILVA',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1958-04-14 00:00:00',
            'naturalde'=>'LONDRINA',
            'rg'=>'1.999.506-2',
            'cpf'=>'330.763.599-91',
            'data_filiacao'=>'2004-12-12 00:00:00',
            'data_ordenacao'=>'2004-12-12 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>90,
            'titulo'=>'PASTOR',
            'nome'=>'AMARILDO AMARO DE SOUZA',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1976-09-04 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'6.274.415-4',
            'cpf'=>'021.368.009-22',
            'data_filiacao'=>'2002-10-26 00:00:00',
            'data_ordenacao'=>'2000-11-10 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>154,
            'titulo'=>'PASTORA',
            'nome'=>'SANDRA REGINA SANTOS',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1966-02-28 00:00:00',
            'naturalde'=>'S.J. DE RIBARNAS - MA',
            'rg'=>'3.841.365',
            'cpf'=>'288.639.503-00',
            'data_filiacao'=>'2003-02-16 00:00:00',
            'data_ordenacao'=>'2003-02-16 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>176,
            'titulo'=>'PASTOR',
            'nome'=>'LUIZ FERNANDO POLO',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1967-12-13 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'4.164.228-9',
            'cpf'=>'119.774.518-10',
            'data_filiacao'=>'1998-12-14 00:00:00',
            'data_ordenacao'=>'1998-12-14 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>178,
            'titulo'=>'PASTOR',
            'nome'=>'MARCELO AUGUSTO BUENO PAOLIELO',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1966-11-07 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'3.495.368-6',
            'cpf'=>'788.834.829-72',
            'data_filiacao'=>'2003-12-11 00:00:00',
            'data_ordenacao'=>'2003-12-14 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>179,
            'titulo'=>'PASTORA',
            'nome'=>'ADRIANE CONSALTER PAOLIELO',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1970-10-11 00:00:00',
            'naturalde'=>'PARANAVAÍ - PR',
            'rg'=>'4.511.945-9',
            'cpf'=>'049.716.929-08',
            'data_filiacao'=>'2003-12-11 00:00:00',
            'data_ordenacao'=>'2003-12-14 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>184,
            'titulo'=>'PASTORA',
            'nome'=>'MARIA APARECIDA DE SOUZA OLIVEIRA',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1960-08-25 00:00:00',
            'naturalde'=>'ALVORADA DO SUL',
            'rg'=>'5.479.552-1',
            'cpf'=>'111.111.111',
            'data_filiacao'=>'2000-06-21 00:00:00',
            'data_ordenacao'=>'2000-06-21 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>186,
            'titulo'=>'BISPA',
            'nome'=>'MARIA CRISTINA DOS SANTOS',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1960-05-01 00:00:00',
            'naturalde'=>'IEPÊ- SP',
            'rg'=>'5.302.547-1',
            'cpf'=>'834.420.069-53',
            'data_filiacao'=>'1989-07-30 00:00:00',
            'data_ordenacao'=>'1989-09-01 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>193,
            'titulo'=>'EVANGELISTA',
            'nome'=>'MARLI DE FÁTIMA LEAL',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1956-06-26 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'1.498.636-7',
            'cpf'=>'324.226.799-00',
            'data_filiacao'=>'2004-12-12 00:00:00',
            'data_ordenacao'=>'2004-12-12 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>233,
            'titulo'=>'EVANGELISTA',
            'nome'=>'ROMILDO SILVA DO SANTOS',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1960-04-08 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'3.533.883-7',
            'cpf'=>NULL,
            'data_filiacao'=>'2000-06-21 00:00:00',
            'data_ordenacao'=>'2000-06-21 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>246,
            'titulo'=>'EVANGELISTA',
            'nome'=>'SILVANIRA TEIXEIRA DOS SANTOS',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1964-09-25 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'4.152.785-4',
            'cpf'=>NULL,
            'data_filiacao'=>'2000-06-21 00:00:00',
            'data_ordenacao'=>'2000-06-21 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>283,
            'titulo'=>'PASTOR',
            'nome'=>'MICHEL DOS SANTOS',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1966-02-25 00:00:00',
            'naturalde'=>'SÃO LUIZ - MA',
            'rg'=>'34597662-9',
            'cpf'=>'307.434.418-00',
            'data_filiacao'=>'2007-12-15 00:00:00',
            'data_ordenacao'=>'2007-12-15 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>313,
            'titulo'=>'PASTOR',
            'nome'=>'GEORGETHON ROBESPIERRE FONSECA ALVES',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1985-05-11 00:00:00',
            'naturalde'=>'PARANÁ',
            'rg'=>'2.502.980',
            'cpf'=>'041.443.289-45',
            'data_filiacao'=>'2008-12-13 00:00:00',
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>314,
            'titulo'=>'PASTORA',
            'nome'=>'KELI DAIANE DOS SANTOS ALVES',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1984-04-06 00:00:00',
            'naturalde'=>'DF',
            'rg'=>'8.226.372-1',
            'cpf'=>'045.212.719-01',
            'data_filiacao'=>NULL,
            'data_ordenacao'=>'2008-12-13 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>350,
            'titulo'=>'PASTOR',
            'nome'=>'JORGE LUIZ CARVALHO GONÇALVES',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>NULL,
            'naturalde'=>'RIO DE JANEIRO',
            'rg'=>'60462313',
            'cpf'=>'811.949.517-91',
            'data_filiacao'=>'2010-04-02 00:00:00',
            'data_ordenacao'=>'2009-12-19 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>351,
            'titulo'=>'PASTOR',
            'nome'=>'WELINGTON D. DOS SANTOS',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1983-01-13 00:00:00',
            'naturalde'=>'LONDRINA',
            'rg'=>'77756558',
            'cpf'=>NULL,
            'data_filiacao'=>'2010-04-02 00:00:00',
            'data_ordenacao'=>'2009-12-19 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>352,
            'titulo'=>'EVANGELISTA',
            'nome'=>'VERA MARIA FESCINA CASAM',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1956-04-26 00:00:00',
            'naturalde'=>'SÃO PAULO',
            'rg'=>'1125217',
            'cpf'=>'629.896.349-91',
            'data_filiacao'=>'2010-04-02 00:00:00',
            'data_ordenacao'=>'2010-04-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>353,
            'titulo'=>'EVANGELISTA',
            'nome'=>'ANTÔNIO LUIS MARIANI',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1971-03-08 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'44273551',
            'cpf'=>'535.393.209-97',
            'data_filiacao'=>'2008-12-13 00:00:00',
            'data_ordenacao'=>'2010-04-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>173,
            'titulo'=>'PASTORA',
            'nome'=>'LEONICE QUIRINO',
            'email'=>NULL,
            'igreja'=>'ICEL',
            'dnas'=>'1958-12-29 00:00:00',
            'naturalde'=>'BORRAZÓPOLIS',
            'rg'=>'3.226.188-4',
            'cpf'=>'327.109.769-00',
            'data_filiacao'=>'1998-12-14 00:00:00',
            'data_ordenacao'=>'1997-12-15 00:00:00',
            'obs'=>'Icel'
        ] );
        
        Member::create( [
            'id'=>347,
            'titulo'=>'PASTOR',
            'nome'=>'IODECEN VICENTE',
            'email'=>'iodecenvicente@gmail.com',
            'igreja'=>'IGREJA  ICEL',
            'dnas'=>'1961-03-14 00:00:00',
            'naturalde'=>'CRUZEIRO DO OESTE',
            'rg'=>'3351856-0',
            'cpf'=>'466.455.789-20',
            'data_filiacao'=>'2010-04-02 00:00:00',
            'data_ordenacao'=>'2008-12-13 00:00:00',
            'obs'=>'ICEL'
        ] );
        
        Member::create( [
            'id'=>51,
            'titulo'=>'PASTORA',
            'nome'=>'ISABEL APARECIDA ALVES MAIA',
            'email'=>NULL,
            'igreja'=>'IGREJA APOSTÓLICA DO REINO DE DEUS',
            'dnas'=>'1961-09-08 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'3.120.375-9',
            'cpf'=>'471.406.749-49',
            'data_filiacao'=>'2003-12-14 00:00:00',
            'data_ordenacao'=>'2003-12-14 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>548,
            'titulo'=>'PASTOR',
            'nome'=>'OVÍDIO CANTEIRO DOS SANTOS',
            'email'=>'pr.ovidio12@yahoo.com.br',
            'igreja'=>'IGREJA APOSTÓLICA OBEDE EDOM',
            'dnas'=>'1950-06-03 00:00:00',
            'naturalde'=>'BATAGUASSU - MS',
            'rg'=>'0965356314',
            'cpf'=>'069.869.781-20',
            'data_filiacao'=>'2017-11-01 00:00:00',
            'data_ordenacao'=>'1989-11-01 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>549,
            'titulo'=>'PASTORA',
            'nome'=>'VANDA MARIA SANTANA PIAZER DOS SANTOS',
            'email'=>'pr.ovidio12@yahoo.com.br',
            'igreja'=>'IGREJA APOSTÓLICA OBEDE EDOM',
            'dnas'=>'2005-03-16 00:00:00',
            'naturalde'=>'GUIA LOPES DA LAGUNA',
            'rg'=>'104802',
            'cpf'=>'153.906.752-15',
            'data_filiacao'=>'2017-11-01 00:00:00',
            'data_ordenacao'=>'2005-03-16 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>414,
            'titulo'=>'PASTORA',
            'nome'=>'PAULA GARCIA DE SOUZA ARAÚJO',
            'email'=>'paulagarciasouza@yahoo.com.br',
            'igreja'=>'IGREJA BATISTA NACIONAL GOEL',
            'dnas'=>'1983-03-22 00:00:00',
            'naturalde'=>'ITABIRA-MG',
            'rg'=>'11306848 SSPMG',
            'cpf'=>'055.692.856-36',
            'data_filiacao'=>'2011-08-07 00:00:00',
            'data_ordenacao'=>'2011-08-07 00:00:00',
            'obs'=>'Igreja = MINISTÉRIO FIEL Validade = 1 ano'
        ] );
        
        Member::create( [
            'id'=>415,
            'titulo'=>'PASTOR',
            'nome'=>'NÉLITON DE ARAÚJO SILVA',
            'email'=>'neliton44@hotmail.com',
            'igreja'=>'IGREJA BATISTA NACIONAL GOEL',
            'dnas'=>'1965-12-23 00:00:00',
            'naturalde'=>'DORES DE INDAIÁ - MG',
            'rg'=>'M 2.336.306 SSPMG',
            'cpf'=>'533.906.606-15',
            'data_filiacao'=>'2011-08-07 00:00:00',
            'data_ordenacao'=>'2011-08-07 00:00:00',
            'obs'=>'Ig -> Ministério FIEL Validade = 1 ano'
        ] );
        
        Member::create( [
            'id'=>466,
            'titulo'=>'PASTOR',
            'nome'=>'JOSÉ VIDIGAL PRETO BORGES',
            'email'=>'josevidborges@hotmail.com',
            'igreja'=>'IGREJA BATISTA NACIONAL GOEL',
            'dnas'=>'1952-09-08 00:00:00',
            'naturalde'=>'BELÉM DO PARÁ',
            'rg'=>'18.614.841',
            'cpf'=>'059.839.912-72',
            'data_filiacao'=>'2015-01-25 00:00:00',
            'data_ordenacao'=>'2000-12-20 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>426,
            'titulo'=>'PASTOR',
            'nome'=>'CHARLES REUEL DE ANDRADE BENTES',
            'email'=>'reuell2001@hotmail.com',
            'igreja'=>'IGREJA BATISTA NACIONAL GOEL',
            'dnas'=>'1980-03-21 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'349469852 SSP-SP',
            'cpf'=>'216.260.568-62',
            'data_filiacao'=>NULL,
            'data_ordenacao'=>'2011-12-18 00:00:00',
            'obs'=>'Cadastrado em 14/02/2013'
        ] );
        
        Member::create( [
            'id'=>428,
            'titulo'=>'PASTORA',
            'nome'=>'FLORENCE MARA DE SOUSA',
            'email'=>NULL,
            'igreja'=>'IGREJA BATISTA NACIONAL GOEL',
            'dnas'=>'1948-08-08 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'M448.173 SSP-MG',
            'cpf'=>'174.765.856-15',
            'data_filiacao'=>NULL,
            'data_ordenacao'=>'2006-05-28 00:00:00',
            'obs'=>'ADICIONADO EM 14/02/2013'
        ] );
        
        Member::create( [
            'id'=>430,
            'titulo'=>'PASTOR',
            'nome'=>'JEFERSON PAULO DE SOUSA',
            'email'=>'pastorjeferson.sousa@gmail.com',
            'igreja'=>'IGREJA BATISTA NACIONAL GOEL',
            'dnas'=>'1953-08-13 00:00:00',
            'naturalde'=>'LAGAMAR - MG',
            'rg'=>'M-1.235.271 SSP-MG',
            'cpf'=>'144.143.926-91',
            'data_filiacao'=>NULL,
            'data_ordenacao'=>'2006-05-28 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>563,
            'titulo'=>'PASTOR',
            'nome'=>'CELMO CANUTO DA SILVA',
            'email'=>'celsocanuto@gmail.com',
            'igreja'=>'IGREJA BATISTA NACIONAL GOEL',
            'dnas'=>'1959-11-17 00:00:00',
            'naturalde'=>'RIO DE JANEIRO - RJ',
            'rg'=>'025180372-2',
            'cpf'=>'654.394.737-34',
            'data_filiacao'=>'2018-10-17 00:00:00',
            'data_ordenacao'=>'2018-05-27 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>479,
            'titulo'=>'PASTORA',
            'nome'=>'MAGDA GONÇALVES DE JESUS',
            'email'=>'pra.magdag@gmail.com',
            'igreja'=>'IGREJA BATISTA NACIONAL GOEL',
            'dnas'=>'1972-08-16 00:00:00',
            'naturalde'=>'SÃO BERNARDO DO CAMPO - SP',
            'rg'=>'7.175.022 SSPMG',
            'cpf'=>'026.887.826-90',
            'data_filiacao'=>'2015-07-01 00:00:00',
            'data_ordenacao'=>'2007-09-08 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>460,
            'titulo'=>'OBREIRA',
            'nome'=>'PRISCILA BELEZI',
            'email'=>NULL,
            'igreja'=>'IGREJA CASA DE ORAÇÃO PARA TODOS OS POVOS',
            'dnas'=>'1970-10-16 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'5838407-0',
            'cpf'=>'648.908.309-44',
            'data_filiacao'=>'2011-03-22 00:00:00',
            'data_ordenacao'=>'2011-03-22 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>354,
            'titulo'=>'PASTOR',
            'nome'=>'JOÃO MARIA PINHEIRO JUNIOR',
            'email'=>NULL,
            'igreja'=>'IGREJA COM. EVANG. DE LIBERTAÇÃO - JD. ACAPULCO',
            'dnas'=>'1959-05-23 00:00:00',
            'naturalde'=>'LONDRINA',
            'rg'=>'3287412',
            'cpf'=>'364.987.',
            'data_filiacao'=>'2010-04-02 00:00:00',
            'data_ordenacao'=>'2010-04-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>355,
            'titulo'=>'PASTORA',
            'nome'=>'MÁRCIA REGINA PIETSIAKI PINHEIRO',
            'email'=>NULL,
            'igreja'=>'IGREJA COM. EVANG. DE LIBERTAÇÃO - JD. ACAPULCO',
            'dnas'=>'1963-06-14 00:00:00',
            'naturalde'=>'ARAPONGAS',
            'rg'=>'3.136.728-0',
            'cpf'=>'362.489.409-91',
            'data_filiacao'=>'2010-04-02 00:00:00',
            'data_ordenacao'=>'2010-04-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>356,
            'titulo'=>'PASTOR',
            'nome'=>'ADILSON SIDNEY DE ANDRADE',
            'email'=>NULL,
            'igreja'=>'IGREJA COM. EVANG. DE LIBERTAÇÃO - JD. ACAPULCO',
            'dnas'=>'1980-03-16 00:00:00',
            'naturalde'=>'LONDRINA',
            'rg'=>'68458854',
            'cpf'=>'029.270.849-12',
            'data_filiacao'=>'2010-04-02 00:00:00',
            'data_ordenacao'=>'2010-04-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>357,
            'titulo'=>'PASTORA',
            'nome'=>'FERNANDA VERÔNICA FEIJÓ DE ANDRADE',
            'email'=>NULL,
            'igreja'=>'IGREJA COM. EVANG. DE LIBERTAÇÃO - JD. ACAPULCO',
            'dnas'=>'2010-10-02 00:00:00',
            'naturalde'=>'LONDRINA',
            'rg'=>'82396543',
            'cpf'=>'040.894.699-70',
            'data_filiacao'=>'2010-04-02 00:00:00',
            'data_ordenacao'=>'2010-04-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>358,
            'titulo'=>'PASTOR',
            'nome'=>'CLEVERSON VERONEZ OLIVEIRA',
            'email'=>NULL,
            'igreja'=>'IGREJA COM. EVANG. DE LIBERTAÇÃO - JD. ACAPULCO',
            'dnas'=>'1974-10-19 00:00:00',
            'naturalde'=>'LONDRINA',
            'rg'=>'58595276',
            'cpf'=>'017.747.769-52',
            'data_filiacao'=>'2010-04-02 00:00:00',
            'data_ordenacao'=>'2010-04-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>359,
            'titulo'=>'PASTORA',
            'nome'=>'SARA PERES VICENTE',
            'email'=>NULL,
            'igreja'=>'IGREJA COM. EVANG. DE LIBERTAÇÃO - JD. ACAPULCO',
            'dnas'=>'1967-01-29 00:00:00',
            'naturalde'=>'INGAZERA',
            'rg'=>'40017089',
            'cpf'=>'531.995.299-68',
            'data_filiacao'=>'2010-04-02 00:00:00',
            'data_ordenacao'=>'2010-04-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>386,
            'titulo'=>'PASTOR',
            'nome'=>'JANDIR ZANCHETA FILHO',
            'email'=>NULL,
            'igreja'=>'IGREJA COMUNIDADE DA FÉ',
            'dnas'=>'1952-12-03 00:00:00',
            'naturalde'=>'ASSIS - SP',
            'rg'=>'5.768.091 SSP-SP',
            'cpf'=>'797.876.498-20',
            'data_filiacao'=>'2008-12-28 00:00:00',
            'data_ordenacao'=>'2008-12-28 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>387,
            'titulo'=>'PASTORA',
            'nome'=>'SILVANA SILVA ZANCHETA',
            'email'=>NULL,
            'igreja'=>'IGREJA COMUNIDADE DA FÉ',
            'dnas'=>'1958-05-19 00:00:00',
            'naturalde'=>'ASSIS - SP',
            'rg'=>'7.102.124',
            'cpf'=>'015.288.428-93',
            'data_filiacao'=>'2008-12-28 00:00:00',
            'data_ordenacao'=>'2008-12-28 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>207,
            'titulo'=>'PASTOR',
            'nome'=>'PAULO ROSSINI',
            'email'=>'tigafi@sercomtel.com.br',
            'igreja'=>'IGREJA CRISTÃ RESTAURANDO VIDAS',
            'dnas'=>'1961-06-20 00:00:00',
            'naturalde'=>'PIRACICABA',
            'rg'=>'2141928-1',
            'cpf'=>'367.456.429-72',
            'data_filiacao'=>'2014-11-20 00:00:00',
            'data_ordenacao'=>NULL,
            'obs'=>'End. Av. Robert Koch, 777 salas 3 e 4 Jd. Monterrey 99938-0002 (Tim)'
        ] );
        
        Member::create( [
            'id'=>208,
            'titulo'=>'PASTORA',
            'nome'=>'DÉBORA ZEMUNER ROSSINI',
            'email'=>'deborazemuner@hotmail.com',
            'igreja'=>'IGREJA CRISTÃ RESTAURANDO VIDAS',
            'dnas'=>'1963-05-24 00:00:00',
            'naturalde'=>'LONDRINA',
            'rg'=>'32064779',
            'cpf'=>'549.548.519-04',
            'data_filiacao'=>'2014-11-20 00:00:00',
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>166,
            'titulo'=>'PASTOR',
            'nome'=>'JOSIAS GOULARD',
            'email'=>'goulard@onda.com.br',
            'igreja'=>'IGREJA DAS NAÇÕES',
            'dnas'=>NULL,
            'naturalde'=>NULL,
            'rg'=>NULL,
            'cpf'=>NULL,
            'data_filiacao'=>NULL,
            'data_ordenacao'=>NULL,
            'obs'=>'josias@gmail.com'
        ] );
        
        Member::create( [
            'id'=>458,
            'titulo'=>'PASTORA',
            'nome'=>'LENI EUNICE ERDEI MORENO',
            'email'=>NULL,
            'igreja'=>'IGREJA EPISCOPAL ANGLICANA LIVRE',
            'dnas'=>'1956-09-03 00:00:00',
            'naturalde'=>'SAO PAULO - SP',
            'rg'=>'8656839',
            'cpf'=>'851.928.058-72',
            'data_filiacao'=>'2014-07-22 00:00:00',
            'data_ordenacao'=>'2000-07-02 00:00:00',
            'obs'=>'O TELEFONE CELULAR TEM MAIS UM DIGITO ANTES 98245-2110'
        ] );
        
        Member::create( [
            'id'=>459,
            'titulo'=>'BISPO',
            'nome'=>'JOSE APARECIDO PERAÇOLI MORENO',
            'email'=>NULL,
            'igreja'=>'IGREJA EPISCOPAL ANGLICANA LIVRE',
            'dnas'=>'1952-09-13 00:00:00',
            'naturalde'=>'SAO PAULO - SP',
            'rg'=>'5.978.379-5 - SSP/SP',
            'cpf'=>'641.176.428-04',
            'data_filiacao'=>'2014-07-22 00:00:00',
            'data_ordenacao'=>'1975-06-01 00:00:00',
            'obs'=>'CELULAR TEM O NOVO DIGITO 9: 98328-0813'
        ] );
        
        Member::create( [
            'id'=>329,
            'titulo'=>'PASTOR',
            'nome'=>'VALMIR DA SILVA MARTINS',
            'email'=>NULL,
            'igreja'=>'IGREJA EVANGÉLICA  CASA DE ORAÇÃO',
            'dnas'=>'1965-05-06 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'2158347',
            'cpf'=>'390.746.769-87',
            'data_filiacao'=>'2009-05-27 00:00:00',
            'data_ordenacao'=>'2009-05-27 00:00:00',
            'obs'=>'TEMPLO: RUA NEO ALVES MARTINS, 864'
        ] );
        
        Member::create( [
            'id'=>495,
            'titulo'=>'PASTORA',
            'nome'=>'DEYSE EMMANOELLE RIBEIRO MARTINS GOMES',
            'email'=>'deisemanoele@hotmail.com',
            'igreja'=>'IGREJA EVANGÉLICA ADONAI SHALOM',
            'dnas'=>NULL,
            'naturalde'=>'FORTALEZA CE',
            'rg'=>'1111222 SSP-MS',
            'cpf'=>'905.194.931-68',
            'data_filiacao'=>'2015-02-16 00:00:00',
            'data_ordenacao'=>'2014-11-23 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>531,
            'titulo'=>'PASTOR',
            'nome'=>'THIAGO LAMEU DA SILVA',
            'email'=>'thiagolameuefilhos@gmail.com',
            'igreja'=>'IGREJA EVANGÉLICA ALIANÇA COM CRISTO',
            'dnas'=>'1990-01-25 00:00:00',
            'naturalde'=>'ASSIS - SP',
            'rg'=>'461400996',
            'cpf'=>'387.165.758-14',
            'data_filiacao'=>'2016-06-14 00:00:00',
            'data_ordenacao'=>'2006-11-26 00:00:00',
            'obs'=>'*9º Acrescentar Dígito aos telefones'
        ] );
        
        Member::create( [
            'id'=>496,
            'titulo'=>'PASTORA',
            'nome'=>'NOEMIA CAMARA DE BARROS',
            'email'=>'noemiacamarabarros@hotmail.com',
            'igreja'=>'IGREJA EVANGELICA BETEL',
            'dnas'=>'1971-06-10 00:00:00',
            'naturalde'=>'MARINGA - PR',
            'rg'=>'1081171 SSP-PR',
            'cpf'=>'793.325.521-34',
            'data_filiacao'=>'2015-10-15 00:00:00',
            'data_ordenacao'=>'2015-03-03 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>497,
            'titulo'=>'PASTOR',
            'nome'=>'JOSÉ APARECIDO DE BARROS FILHO',
            'email'=>'juca_engenharia@hotmail.com',
            'igreja'=>'IGREJA EVANGÉLICA BETEL - CASA DE DEUS',
            'dnas'=>'1971-06-10 00:00:00',
            'naturalde'=>'MARINGA',
            'rg'=>'147537',
            'cpf'=>'518.289.601-87',
            'data_filiacao'=>'2015-02-15 00:00:00',
            'data_ordenacao'=>'2015-03-03 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>491,
            'titulo'=>'PASTOR',
            'nome'=>'SIDNEY ASSIS DE SOUZA',
            'email'=>'sidneyroyal@hotmail.com',
            'igreja'=>'IGREJA EVANGÉLICA BETEL CASA DE DEUS',
            'dnas'=>'1971-03-16 00:00:00',
            'naturalde'=>'CASCAVEL-PR',
            'rg'=>'89433878 SSP-PR',
            'cpf'=>NULL,
            'data_filiacao'=>'2015-02-16 00:00:00',
            'data_ordenacao'=>'2011-03-16 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>408,
            'titulo'=>'PASTORA',
            'nome'=>'LURDES MENEGAT',
            'email'=>NULL,
            'igreja'=>'IGREJA EVANGÉLICA CASA DE ORAÇÃO',
            'dnas'=>'1948-05-10 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'3.852.593-0 SSP-PR',
            'cpf'=>'165.000.161-49',
            'data_filiacao'=>'2011-11-22 00:00:00',
            'data_ordenacao'=>'2011-11-22 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>564,
            'titulo'=>'PASTORA',
            'nome'=>'MARLY ELIZABETE CHINAGLIA MARTINS',
            'email'=>NULL,
            'igreja'=>'IGREJA EVANGÉLICA CASA DE ORAÇÃO',
            'dnas'=>'1965-05-06 00:00:00',
            'naturalde'=>'TERRA RICA',
            'rg'=>'31556368',
            'cpf'=>'576.626.229-91',
            'data_filiacao'=>'2003-11-30 00:00:00',
            'data_ordenacao'=>'2003-11-30 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>285,
            'titulo'=>'PASTORA',
            'nome'=>'LEILA NOGUEIRA R. DE OLIVEIRA',
            'email'=>'PRALEILA12@HOTMAIL.COM',
            'igreja'=>'IGREJA EVANGÉLICA COMUNIDADE DA FÉ',
            'dnas'=>'1962-04-18 00:00:00',
            'naturalde'=>'GUARACI - PR',
            'rg'=>'35.224.395-8',
            'cpf'=>'438.804.959-04',
            'data_filiacao'=>'2007-12-02 00:00:00',
            'data_ordenacao'=>'2003-09-07 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>286,
            'titulo'=>'PASTOR',
            'nome'=>'GIRSON ANTONIO DE OLIVEIRA',
            'email'=>'PRGIRSON12@HOTMAIL.COM',
            'igreja'=>'IGREJA EVANGÉLICA COMUNIDADE DA FÉ',
            'dnas'=>'1962-06-02 00:00:00',
            'naturalde'=>'GUARACI - PR',
            'rg'=>'2.212.917-1',
            'cpf'=>'327.705.889-15',
            'data_filiacao'=>'2007-12-02 00:00:00',
            'data_ordenacao'=>'1983-12-07 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>287,
            'titulo'=>'PASTOR',
            'nome'=>'DANIEL GUGLIERMETE JÚNIOR',
            'email'=>NULL,
            'igreja'=>'IGREJA EVANGÉLICA COMUNIDADE DA FÉ',
            'dnas'=>'1969-02-17 00:00:00',
            'naturalde'=>'ASSIS - SP',
            'rg'=>'19.336.558 SSP-SP',
            'cpf'=>'113.278.538-33',
            'data_filiacao'=>'2007-12-02 00:00:00',
            'data_ordenacao'=>'2007-12-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>288,
            'titulo'=>'PASTORA',
            'nome'=>'NILCÉIA ADRIANA DINIZ GUGLIERMETE',
            'email'=>NULL,
            'igreja'=>'IGREJA EVANGÉLICA COMUNIDADE DA FÉ',
            'dnas'=>'1974-06-24 00:00:00',
            'naturalde'=>'ASSIS - SP',
            'rg'=>'27.084.220.2 SSP-SP',
            'cpf'=>'206.438.748-01',
            'data_filiacao'=>'2007-12-02 00:00:00',
            'data_ordenacao'=>'2007-12-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>559,
            'titulo'=>'PASTORA',
            'nome'=>'JÚLIA CAREN DIAS DE AZEVEDO',
            'email'=>'missiojuliacaren.99@outlook.com',
            'igreja'=>'IGREJA EVANGÉLICA COMUNIDADE DA FÉ ESPAÇO VIDA',
            'dnas'=>'1999-11-27 00:00:00',
            'naturalde'=>'PARIGUERA-AÇU - SP',
            'rg'=>'538609813',
            'cpf'=>'467.705.668-42',
            'data_filiacao'=>'2018-07-02 00:00:00',
            'data_ordenacao'=>'2018-07-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>557,
            'titulo'=>'PASTOR',
            'nome'=>'NELSON MARIANO DE OLIVEIRA',
            'email'=>'cantinhodatarefa2008@hotmail.com',
            'igreja'=>'IGREJA EVANGELICA COMUNIDAED DA FÉ',
            'dnas'=>'1972-08-05 00:00:00',
            'naturalde'=>'ASSIS',
            'rg'=>'21537700X',
            'cpf'=>'138.113.578-16',
            'data_filiacao'=>'2018-07-02 00:00:00',
            'data_ordenacao'=>'2018-07-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>560,
            'titulo'=>'PASTORA',
            'nome'=>'ISABEL CRISTINA MORETI MARIANO DE OLIVEIRA',
            'email'=>'cantinhodatarefa2008@hotmail.com',
            'igreja'=>'IGREJA EVANGELICA COMUNIDAED DA FÉ',
            'dnas'=>'1972-11-12 00:00:00',
            'naturalde'=>'SAO PAUO',
            'rg'=>'22695321X',
            'cpf'=>'155.654.908-39',
            'data_filiacao'=>'2018-07-02 00:00:00',
            'data_ordenacao'=>'2018-07-02 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>324,
            'titulo'=>'PASTOR',
            'nome'=>'LUIZ CARLOS DE JESUS',
            'email'=>NULL,
            'igreja'=>'IGREJA EVANGÉLICA DO TATUAPÉ',
            'dnas'=>NULL,
            'naturalde'=>NULL,
            'rg'=>'18.646.853',
            'cpf'=>NULL,
            'data_filiacao'=>'2008-08-24 00:00:00',
            'data_ordenacao'=>'2006-11-21 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>325,
            'titulo'=>'MISSIONÁRIA',
            'nome'=>'MARINA FERREIRA DE JESUS',
            'email'=>NULL,
            'igreja'=>'IGREJA EVANGÉLICA DO TATUAPÉ',
            'dnas'=>NULL,
            'naturalde'=>'BAHIA',
            'rg'=>'18.646.853',
            'cpf'=>NULL,
            'data_filiacao'=>'2008-08-24 00:00:00',
            'data_ordenacao'=>'2006-11-12 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>319,
            'titulo'=>'PASTORA',
            'nome'=>'MARIA PATROCÍNIA BACELLI SILVA',
            'email'=>NULL,
            'igreja'=>'IGREJA EVANGÉLICA DO TATUAPÉ',
            'dnas'=>'1941-06-01 00:00:00',
            'naturalde'=>'SOROCABA',
            'rg'=>'8617141',
            'cpf'=>'835.028.748-91',
            'data_filiacao'=>'2008-08-24 00:00:00',
            'data_ordenacao'=>'2006-11-12 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>320,
            'titulo'=>'MISSIONÁRIA',
            'nome'=>'LOURDES MOREIRA DE ALMEIDA',
            'email'=>NULL,
            'igreja'=>'IGREJA EVANGÉLICA DO TATUAPÉ',
            'dnas'=>'1951-11-14 00:00:00',
            'naturalde'=>'BILAC -SP',
            'rg'=>'12378444',
            'cpf'=>'013.594.728-08',
            'data_filiacao'=>'2008-08-24 00:00:00',
            'data_ordenacao'=>'2006-11-12 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>321,
            'titulo'=>'PASTOR',
            'nome'=>'JOSÉ HUMBERTO GOMES',
            'email'=>NULL,
            'igreja'=>'IGREJA EVANGÉLICA DO TATUAPÉ',
            'dnas'=>NULL,
            'naturalde'=>'SÃO JOSÉ DO CAMPESTRE -RN',
            'rg'=>'11.169.371-8',
            'cpf'=>'994.966.748-87',
            'data_filiacao'=>'2008-08-24 00:00:00',
            'data_ordenacao'=>'2001-11-18 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>322,
            'titulo'=>'PASTOR',
            'nome'=>'NELSON FRANCISCO FREIRE',
            'email'=>NULL,
            'igreja'=>'IGREJA EVANGÉLICA DO TATUAPÉ',
            'dnas'=>'1953-10-28 00:00:00',
            'naturalde'=>'LAGARTO -SP',
            'rg'=>'14.590.771-5',
            'cpf'=>'281.014.309-97',
            'data_filiacao'=>'2008-08-24 00:00:00',
            'data_ordenacao'=>'2001-11-18 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>323,
            'titulo'=>'EVANGELISTA',
            'nome'=>'FRANCISCO EDIMAR COSTA',
            'email'=>NULL,
            'igreja'=>'IGREJA EVANGÉLICA DO TATUAPÉ',
            'dnas'=>'1965-11-14 00:00:00',
            'naturalde'=>'ESPERANTINA - PIAUÍ',
            'rg'=>'29896151',
            'cpf'=>'286.655.703-49',
            'data_filiacao'=>'2008-08-25 00:00:00',
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>327,
            'titulo'=>'PASTOR',
            'nome'=>'MARCUS JOSÉ DA SILVA',
            'email'=>NULL,
            'igreja'=>'IGREJA EVANGÉLICA DO TATUAPÉ',
            'dnas'=>'1976-07-17 00:00:00',
            'naturalde'=>'SANTO ANDRÉ',
            'rg'=>'26.352.233-7',
            'cpf'=>'252.894.938-32',
            'data_filiacao'=>'2008-08-24 00:00:00',
            'data_ordenacao'=>'2006-11-12 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>328,
            'titulo'=>'MISSIONÁRIA',
            'nome'=>'ALZIRA ROCHA GOMES',
            'email'=>NULL,
            'igreja'=>'IGREJA EVANGÉLICA DO TATUAPÉ',
            'dnas'=>'1924-07-22 00:00:00',
            'naturalde'=>'MARACAÍ',
            'rg'=>'8.608.982-1',
            'cpf'=>'151.586.638-66',
            'data_filiacao'=>'2008-08-24 00:00:00',
            'data_ordenacao'=>'2006-11-12 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>326,
            'titulo'=>'PRESBITERO',
            'nome'=>'FRANCISCO JUNIOR ALVES VIDAL',
            'email'=>NULL,
            'igreja'=>'IGREJA EVANGÉLICA DO TATUAPÉ',
            'dnas'=>'1980-11-20 00:00:00',
            'naturalde'=>'PAU DOS FERROS',
            'rg'=>'1870693',
            'cpf'=>'008.142.564-30',
            'data_filiacao'=>'2008-08-24 00:00:00',
            'data_ordenacao'=>'2006-11-12 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>268,
            'titulo'=>'PASTORA',
            'nome'=>'IVANETE DE QUADROS BITENCOURT DE MOURA',
            'email'=>NULL,
            'igreja'=>'IGREJA EVANGÉLICA PENTECOSTAL SINAIS DE FÉ',
            'dnas'=>'1973-03-01 00:00:00',
            'naturalde'=>'LONDRINA',
            'rg'=>'612.372-2',
            'cpf'=>'879.981.579-68',
            'data_filiacao'=>'2007-02-03 00:00:00',
            'data_ordenacao'=>'2007-02-03 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>263,
            'titulo'=>'PASTOR',
            'nome'=>'LUIZ PEREIRA FONSECA',
            'email'=>NULL,
            'igreja'=>'IGREJA EVANGÉLICA SAGRADAS MISSÕES',
            'dnas'=>'1955-12-03 00:00:00',
            'naturalde'=>'JAGUAPITÃ - PR',
            'rg'=>'3.004.069-4 PR',
            'cpf'=>'628.275.379-15',
            'data_filiacao'=>'2006-04-15 00:00:00',
            'data_ordenacao'=>'2006-04-15 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>264,
            'titulo'=>'PASTORA',
            'nome'=>'FÁTIMA CLARA DA SILVA FONSECA',
            'email'=>NULL,
            'igreja'=>'IGREJA EVANGÉLICA SAGRADAS MISSÕES',
            'dnas'=>'1960-11-20 00:00:00',
            'naturalde'=>'GUARACI - PR',
            'rg'=>'5.689.422-5 PR',
            'cpf'=>'792.509.639-04',
            'data_filiacao'=>'2003-04-15 00:00:00',
            'data_ordenacao'=>'2003-04-15 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>455,
            'titulo'=>'PASTOR',
            'nome'=>'DALTON OLIVIO DE SOUZA',
            'email'=>'daltonecamila.dj@gmail.com',
            'igreja'=>'IGREJA EVANGELICA SAGRADAS MISSÕES - VILA NOVA',
            'dnas'=>'1981-03-17 00:00:00',
            'naturalde'=>'MARINGA - PR',
            'rg'=>'7.520.131-1',
            'cpf'=>'007.239.109-01',
            'data_filiacao'=>'2014-08-12 00:00:00',
            'data_ordenacao'=>'2012-04-01 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>406,
            'titulo'=>'PASTOR',
            'nome'=>'ADALBERTO OLIVIO DE SOUZA',
            'email'=>NULL,
            'igreja'=>'IGREJA EVANGÉLICA SAGRADAS MISSOES - VILA NOVA',
            'dnas'=>'1983-09-24 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'8.759.120-4 SSP-PR',
            'cpf'=>'040.133.009-56',
            'data_filiacao'=>'2011-09-24 00:00:00',
            'data_ordenacao'=>'2011-09-24 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>407,
            'titulo'=>'PASTORA',
            'nome'=>'CHARLENE APARECIDA FLORIANO',
            'email'=>NULL,
            'igreja'=>'IGREJA EVANGÉLICA SAGRADAS MISSOES - VILA NOVA',
            'dnas'=>'1981-08-06 00:00:00',
            'naturalde'=>'CAMBÉ - PR',
            'rg'=>'8.293.810-9 SSP-PR',
            'cpf'=>'051.226.239-02',
            'data_filiacao'=>'2011-09-24 00:00:00',
            'data_ordenacao'=>'2011-09-24 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>413,
            'titulo'=>'PASTOR',
            'nome'=>'VAGNER FRANSCISCATTI',
            'email'=>NULL,
            'igreja'=>'IGREJA PRESBITERIANA RENOVADA SALTO GRANDDE',
            'dnas'=>'1978-10-22 00:00:00',
            'naturalde'=>'OSASCO - SP',
            'rg'=>'26.609.443-0 SSP-SP',
            'cpf'=>'274.520.538-26',
            'data_filiacao'=>'2012-06-30 00:00:00',
            'data_ordenacao'=>'2012-05-27 00:00:00',
            'obs'=>'Colocar na Ministério Fiel no campo igreja da Id. Ministerial'
        ] );
        
        Member::create( [
            'id'=>234,
            'titulo'=>'PASTOR',
            'nome'=>'RONALDO ALCANTARA DA SILVA',
            'email'=>NULL,
            'igreja'=>'IGREJA PRIMITIVA MONTE SIÃO',
            'dnas'=>'1969-03-09 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'5.084.945',
            'cpf'=>'679.181.828-34',
            'data_filiacao'=>'1999-02-10 00:00:00',
            'data_ordenacao'=>'1999-02-10 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>279,
            'titulo'=>'PASTOR',
            'nome'=>'OSVALDO LAUREANO RODRIGUES',
            'email'=>NULL,
            'igreja'=>'IGREJA SAGRADAS MISSÕES',
            'dnas'=>'1939-04-22 00:00:00',
            'naturalde'=>'RANCHARIA -SP',
            'rg'=>'1.567.499',
            'cpf'=>'129.034.699-20',
            'data_filiacao'=>NULL,
            'data_ordenacao'=>'1982-02-06 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>32,
            'titulo'=>'PASTOR',
            'nome'=>'JOSUÉ LAMONICA CRESPO',
            'email'=>NULL,
            'igreja'=>'METODISTA',
            'dnas'=>'1944-03-16 00:00:00',
            'naturalde'=>'ROLANDIA - PR',
            'rg'=>'4.266.418',
            'cpf'=>'493.063.838-00',
            'data_filiacao'=>'1987-07-22 00:00:00',
            'data_ordenacao'=>'1983-12-08 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>33,
            'titulo'=>'PASTORA',
            'nome'=>'RUTE TOSETTI LAMÔNICA CRESPO',
            'email'=>NULL,
            'igreja'=>'METODISTA',
            'dnas'=>'1953-03-30 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'19.244.705',
            'cpf'=>NULL,
            'data_filiacao'=>'1987-07-22 00:00:00',
            'data_ordenacao'=>'1983-12-08 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>512,
            'titulo'=>'PASTORA',
            'nome'=>'ADINA PAIXÃO',
            'email'=>'belemcasadopaoiec@hotmail.com',
            'igreja'=>'MINISTERIO EVANGELICO FIEL',
            'dnas'=>NULL,
            'naturalde'=>'BELÉM - PA',
            'rg'=>'4928063',
            'cpf'=>'811.141.412-91',
            'data_filiacao'=>'2015-08-05 00:00:00',
            'data_ordenacao'=>'1992-08-08 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>477,
            'titulo'=>'PASTOR',
            'nome'=>'PAULO SÉRGIO DA SILVA PAIXÃO',
            'email'=>'belemcasadopaoiec@hotmail.com',
            'igreja'=>'MINISTÉRIO EVANGÉLICO FIEL',
            'dnas'=>'1968-03-17 00:00:00',
            'naturalde'=>'BELÉM - PA',
            'rg'=>'1.709.782 SSP-PA',
            'cpf'=>'367.154.092-34',
            'data_filiacao'=>'2015-08-05 00:00:00',
            'data_ordenacao'=>'1987-02-15 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>277,
            'titulo'=>'PASTOR',
            'nome'=>'DANILO JOSÉ CALEGARE',
            'email'=>NULL,
            'igreja'=>'MINISTÉRIO FACE A FACE',
            'dnas'=>'1962-12-14 00:00:00',
            'naturalde'=>'JUNDIAÍ- SP',
            'rg'=>'15.208.886 SSP-SP',
            'cpf'=>'044.835.578-74',
            'data_filiacao'=>'2007-03-12 00:00:00',
            'data_ordenacao'=>'2007-03-12 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>223,
            'titulo'=>'PASTOR',
            'nome'=>'REINALDO FRANCISCO DA SILVA',
            'email'=>NULL,
            'igreja'=>'MINISTÉRIO HOSANA',
            'dnas'=>'1972-01-24 00:00:00',
            'naturalde'=>'PÉROLA - PR',
            'rg'=>'6.647.091-1',
            'cpf'=>'980.755.439-04',
            'data_filiacao'=>'2004-10-30 00:00:00',
            'data_ordenacao'=>'2004-10-30 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>224,
            'titulo'=>'PASTORA',
            'nome'=>'ROSELI GALL DO AMARAL DA SILVA',
            'email'=>NULL,
            'igreja'=>'MINISTÉRIO HOSANA',
            'dnas'=>'1961-09-16 00:00:00',
            'naturalde'=>'PETRÓPOLIS - RJ',
            'rg'=>'07.778.082-3',
            'cpf'=>'802.559.907-82',
            'data_filiacao'=>'2004-10-30 00:00:00',
            'data_ordenacao'=>'2004-10-30 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>388,
            'titulo'=>'PASTOR',
            'nome'=>'JOSÉ CARLOS LACERDA',
            'email'=>NULL,
            'igreja'=>'MINISTÉRIO SAGRADAS MISSOES',
            'dnas'=>'1954-12-19 00:00:00',
            'naturalde'=>'SÃO GABRIEL - RS',
            'rg'=>'6.359.128-9 SESP/PR',
            'cpf'=>'253.248.700-30',
            'data_filiacao'=>'2011-03-22 00:00:00',
            'data_ordenacao'=>'2011-03-22 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>141,
            'titulo'=>'PASTORA',
            'nome'=>'MADALENA BENTO DE FREITAS',
            'email'=>NULL,
            'igreja'=>'MINISTÉRIO SAGRADAS MISSÕES',
            'dnas'=>'1959-01-26 00:00:00',
            'naturalde'=>'SÃO MIGUEL PAULISTA - SP',
            'rg'=>'77.880.471-8',
            'cpf'=>NULL,
            'data_filiacao'=>'1994-07-09 00:00:00',
            'data_ordenacao'=>'1994-07-09 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>418,
            'titulo'=>'PRA AUXILIAR',
            'nome'=>'MARLI CARNELOSSI ANTUNES',
            'email'=>NULL,
            'igreja'=>'MINISTÉRIO SAGRADAS MISSÕES',
            'dnas'=>'1963-06-11 00:00:00',
            'naturalde'=>'IBIPORÃ',
            'rg'=>'4.534.498-3',
            'cpf'=>'649.177.209-82',
            'data_filiacao'=>'2012-06-19 00:00:00',
            'data_ordenacao'=>'2012-06-19 00:00:00',
            'obs'=>'PASTORA AUXILIAR'
        ] );
        
        Member::create( [
            'id'=>419,
            'titulo'=>'PASTOR AUXILIAR',
            'nome'=>'WILLIAM ANTUNES FILHO',
            'email'=>NULL,
            'igreja'=>'MINISTÉRIO SAGRADAS MISSÕES',
            'dnas'=>'1970-07-23 00:00:00',
            'naturalde'=>'SÃO PAULO',
            'rg'=>'6.890.614-8',
            'cpf'=>'092.142.268-73',
            'data_filiacao'=>'2012-06-19 00:00:00',
            'data_ordenacao'=>'2012-06-19 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>422,
            'titulo'=>'EVANGELISTA',
            'nome'=>'VERA LUCIA RAMOS JANEZ',
            'email'=>NULL,
            'igreja'=>'MINISTÉRIO SAGRADAS MISSÕES',
            'dnas'=>'1951-03-07 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'1.957.452-8',
            'cpf'=>'044.150.709-30',
            'data_filiacao'=>'2012-06-19 00:00:00',
            'data_ordenacao'=>'2012-06-19 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>511,
            'titulo'=>'PASTORA',
            'nome'=>'NADIRCE ROBERTO GUERARD',
            'email'=>'nadinharoberto@gmail.com',
            'igreja'=>'MINISTÉRIO SAGRADAS MISSÕES - FRANÇA',
            'dnas'=>'1959-04-30 00:00:00',
            'naturalde'=>'IVAIPORÃ - PR',
            'rg'=>'6.415.912 SSPSC',
            'cpf'=>'363.385.679-04',
            'data_filiacao'=>'2016-01-24 00:00:00',
            'data_ordenacao'=>'2016-01-24 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>46,
            'titulo'=>'PASTOR',
            'nome'=>'ADVALDO HONÓRIO DA SILVA',
            'email'=>NULL,
            'igreja'=>'MINISTÉRIO SAGRADAS MISSÕES - JAGUAPITÃ',
            'dnas'=>'1973-04-18 00:00:00',
            'naturalde'=>'JAGUAPITÃ - PR',
            'rg'=>'7.621.046-2',
            'cpf'=>'838.120.599-91',
            'data_filiacao'=>'2003-02-15 00:00:00',
            'data_ordenacao'=>'2003-02-15 00:00:00',
            'obs'=>'END. DO TEMPLO RUA: ALAGOAS, 83'
        ] );
        
        Member::create( [
            'id'=>47,
            'titulo'=>'PASTORA',
            'nome'=>'LUCINÉIA LOPES CANHÃO DA SILVA',
            'email'=>NULL,
            'igreja'=>'MINISTÉRIO SAGRADAS MISSÕES - JAGUAPITÃ',
            'dnas'=>'1978-07-12 00:00:00',
            'naturalde'=>'JAGUAPITÃ - PR',
            'rg'=>'6.225-651-6',
            'cpf'=>NULL,
            'data_filiacao'=>'2003-02-15 00:00:00',
            'data_ordenacao'=>'2003-02-15 00:00:00',
            'obs'=>'END. DO TEMPLO RUA: ALAGOAS, 83'
        ] );
        
        Member::create( [
            'id'=>421,
            'titulo'=>'PASTORA',
            'nome'=>'HELOISA APARECIDA NOVELLI DE FREITAS',
            'email'=>NULL,
            'igreja'=>'MINISTÉRIO SAGRADAS MISSÕES - VILA ISABEL',
            'dnas'=>'1983-07-15 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'8.340.680-1',
            'cpf'=>'055.091.099-98',
            'data_filiacao'=>'2012-06-19 00:00:00',
            'data_ordenacao'=>'2012-06-19 00:00:00',
            'obs'=>'PASTORA'
        ] );
        
        Member::create( [
            'id'=>240,
            'titulo'=>'BISPO',
            'nome'=>'SERGIO PAULO DE OLIVEIRA',
            'email'=>NULL,
            'igreja'=>'MINISTÉRIO TENDA DE ADORAÇÃO',
            'dnas'=>'1950-04-16 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'709050 SSP-PR',
            'cpf'=>'063.220.939-91',
            'data_filiacao'=>'2004-12-12 00:00:00',
            'data_ordenacao'=>'2004-12-12 00:00:00',
            'obs'=>'ORDENAÇÃO A BISPO EM 30/09/2011'
        ] );
        
        Member::create( [
            'id'=>241,
            'titulo'=>'BISPA',
            'nome'=>'MEIRY MANSUR DE OLIVEIRA',
            'email'=>NULL,
            'igreja'=>'MINISTÉRIO TENDA DE ADORAÇÃO',
            'dnas'=>'1952-09-25 00:00:00',
            'naturalde'=>'URAÍ - PR',
            'rg'=>'1.140.213 SSP-PR',
            'cpf'=>'005.489.619-30',
            'data_filiacao'=>'2004-12-12 00:00:00',
            'data_ordenacao'=>'2004-12-12 00:00:00',
            'obs'=>'ORDENADA A BISPA EM 30/09/2011'
        ] );
        
        Member::create( [
            'id'=>281,
            'titulo'=>'PASTOR',
            'nome'=>'WALDEMIR APARECIDO DE MORAIS',
            'email'=>NULL,
            'igreja'=>'MINISTÉRIO VALE DE BENÇÃOS',
            'dnas'=>'1957-12-31 00:00:00',
            'naturalde'=>'IBIPORÃ - PR',
            'rg'=>'1.631.803-5',
            'cpf'=>'238.150.439-72',
            'data_filiacao'=>'2007-05-04 00:00:00',
            'data_ordenacao'=>'2007-05-04 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>282,
            'titulo'=>'PASTORA',
            'nome'=>'RAQUEL BARBOSA DE SOUZA MORAIS',
            'email'=>NULL,
            'igreja'=>'MINISTÉRIO VALE DE BENÇÃOS',
            'dnas'=>'1963-10-04 00:00:00',
            'naturalde'=>'JATOBÁ - SP',
            'rg'=>'8.964.961-7',
            'cpf'=>'048.307.908-14',
            'data_filiacao'=>'2007-05-04 00:00:00',
            'data_ordenacao'=>'2007-05-04 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>330,
            'titulo'=>'EVANGELISTA',
            'nome'=>'MARIA NADIR LOPES CORREA DOS SANTOS',
            'email'=>NULL,
            'igreja'=>'MINISTÉRIO VALE DE BENÇÃOS',
            'dnas'=>'1953-05-04 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'816.112-7',
            'cpf'=>'209.989.105-3',
            'data_filiacao'=>'2007-05-04 00:00:00',
            'data_ordenacao'=>'2008-05-04 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>331,
            'titulo'=>'EVANGELISTA',
            'nome'=>'JOSÉ BARBOSA DE SOUZA',
            'email'=>NULL,
            'igreja'=>'MINISTÉRIO VALE DE BENÇÃOS',
            'dnas'=>'1932-08-09 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'110788254',
            'cpf'=>'706.153.908-97',
            'data_filiacao'=>'2007-05-04 00:00:00',
            'data_ordenacao'=>'2008-05-04 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>332,
            'titulo'=>'EVANGELISTA',
            'nome'=>'MÔNICA ELID ORTENZI DE CARVALHO',
            'email'=>NULL,
            'igreja'=>'MINISTÉRIO VALE DE BENÇÃOS',
            'dnas'=>'1958-04-13 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'48874142',
            'cpf'=>'994.360.789-00',
            'data_filiacao'=>'2007-05-04 00:00:00',
            'data_ordenacao'=>'2008-05-04 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>450,
            'titulo'=>'PASTORA',
            'nome'=>'SONIA APARECIDA DA SILVA',
            'email'=>NULL,
            'igreja'=>'MISSAO MONTE SIÃO',
            'dnas'=>'1962-09-25 00:00:00',
            'naturalde'=>'LONDRINA PR',
            'rg'=>'3.560.755-2',
            'cpf'=>'480.254.889-34',
            'data_filiacao'=>'2013-06-15 00:00:00',
            'data_ordenacao'=>'2012-06-15 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>30,
            'titulo'=>'PASTOR',
            'nome'=>'JOSÉ LUCINGER',
            'email'=>NULL,
            'igreja'=>'MISSÃO MONTE SIÃO',
            'dnas'=>'1941-01-02 00:00:00',
            'naturalde'=>'GURARAPES',
            'rg'=>'716.389',
            'cpf'=>'101.907.599-68',
            'data_filiacao'=>'2001-10-14 00:00:00',
            'data_ordenacao'=>'2001-10-14 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>31,
            'titulo'=>'PASTORA',
            'nome'=>'MARIA IZABEL PIRES LUCINGER',
            'email'=>NULL,
            'igreja'=>'MISSÃO MONTE SIÃO',
            'dnas'=>'1946-09-30 00:00:00',
            'naturalde'=>'AVARÉ - SP',
            'rg'=>'1.860.763',
            'cpf'=>'041.596.279-00',
            'data_filiacao'=>'2001-10-14 00:00:00',
            'data_ordenacao'=>'2001-10-14 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>444,
            'titulo'=>'PASTOR',
            'nome'=>'VALDEMIRO CARDOSO',
            'email'=>NULL,
            'igreja'=>'MISSÃO MONTE SIÃO',
            'dnas'=>'1959-09-11 00:00:00',
            'naturalde'=>'ROLANDIA - PR',
            'rg'=>'2.121.111 SSPPR',
            'cpf'=>'362.285.169-49',
            'data_filiacao'=>'2013-06-15 00:00:00',
            'data_ordenacao'=>'2012-06-15 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>445,
            'titulo'=>'EVANGELISTA',
            'nome'=>'DORACI REGINA VIEIRA PRAZERES',
            'email'=>NULL,
            'igreja'=>'MISSÃO MONTE SIÃO',
            'dnas'=>'1948-12-24 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'1.247.497 SSPPR',
            'cpf'=>'187.714.839-34',
            'data_filiacao'=>'2013-06-15 00:00:00',
            'data_ordenacao'=>'2012-06-15 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>446,
            'titulo'=>'OBREIRA',
            'nome'=>'LÚCIA STELLA COSTA PRETA NOLASCO',
            'email'=>NULL,
            'igreja'=>'MISSÃO MONTE SIÃO',
            'dnas'=>'1940-07-25 00:00:00',
            'naturalde'=>'CARAUGOLA - MG',
            'rg'=>'765.626-2 SSPPR',
            'cpf'=>'540.345.829-87',
            'data_filiacao'=>'2012-06-15 00:00:00',
            'data_ordenacao'=>'2012-06-15 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>447,
            'titulo'=>'OBREIRA',
            'nome'=>'MARIA IZABEL TODAO',
            'email'=>NULL,
            'igreja'=>'MISSÃO MONTE SIÃO',
            'dnas'=>NULL,
            'naturalde'=>NULL,
            'rg'=>'1.714.880',
            'cpf'=>NULL,
            'data_filiacao'=>'2013-06-15 00:00:00',
            'data_ordenacao'=>'2012-06-15 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>449,
            'titulo'=>'EVANGELISTA',
            'nome'=>'PAULO CÉSAR PRAZERES',
            'email'=>NULL,
            'igreja'=>'MISSÃO MONTE SIÃO',
            'dnas'=>'1948-12-31 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'641.254-8',
            'cpf'=>'063.218.609-72',
            'data_filiacao'=>'2013-06-15 00:00:00',
            'data_ordenacao'=>'2013-06-15 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>201,
            'titulo'=>'PASTOR',
            'nome'=>'NILTON TULLER',
            'email'=>NULL,
            'igreja'=>'MOLIVE',
            'dnas'=>NULL,
            'naturalde'=>NULL,
            'rg'=>NULL,
            'cpf'=>NULL,
            'data_filiacao'=>NULL,
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>533,
            'titulo'=>'PASTOR',
            'nome'=>'DAMIÃO DA CONCEIÇÃO SANTOS',
            'email'=>'prdamiao2010@hotmail.com',
            'igreja'=>'O PODER DE DEUS EM AÇÃO',
            'dnas'=>'1963-08-03 00:00:00',
            'naturalde'=>'ANTÔNIO DIAS - MG',
            'rg'=>'001116444',
            'cpf'=>'058.467.078-82',
            'data_filiacao'=>'2016-06-14 00:00:00',
            'data_ordenacao'=>'1987-01-07 00:00:00',
            'obs'=>'*9º DÍGITO'
        ] );
        
        Member::create( [
            'id'=>532,
            'titulo'=>'PASTORA',
            'nome'=>'ROSANA AMARAL WOLFF SANTOS',
            'email'=>NULL,
            'igreja'=>'O PODER DE DEUS EM AÇÃO',
            'dnas'=>'1978-06-16 00:00:00',
            'naturalde'=>'BELA VISTA - MS',
            'rg'=>'000911201',
            'cpf'=>'966.145.601-15',
            'data_filiacao'=>'2016-06-14 00:00:00',
            'data_ordenacao'=>'1987-01-07 00:00:00',
            'obs'=>'* ACRESCENTAR O 9º DÍGITO'
        ] );
        
        Member::create( [
            'id'=>547,
            'titulo'=>'PASTOR',
            'nome'=>'ALZIRO ZARUR NANTES GONÇALES',
            'email'=>'alzironantes16@gmail.com',
            'igreja'=>'PRESBITERIANA RENOVADA',
            'dnas'=>'1957-10-22 00:00:00',
            'naturalde'=>'ITAGUAJE - PR',
            'rg'=>'18777690',
            'cpf'=>'239.688.269-49',
            'data_filiacao'=>NULL,
            'data_ordenacao'=>'1983-02-06 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>215,
            'titulo'=>'PASTOR',
            'nome'=>'PEDRO PERES DE SOUZA',
            'email'=>NULL,
            'igreja'=>'PRESBITERIANA RENOVADA',
            'dnas'=>'1964-04-10 00:00:00',
            'naturalde'=>'SILVA JARDIM - RJ',
            'rg'=>'06.941.741-8',
            'cpf'=>'005.705.347-72',
            'data_filiacao'=>'1998-10-10 00:00:00',
            'data_ordenacao'=>'1990-09-18 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>416,
            'titulo'=>'PASTORA',
            'nome'=>'ANA CLÁUDIA DE MORAIS SOARES FRANCISCATTI',
            'email'=>NULL,
            'igreja'=>'PRESBITERIANA RENOVADA DE SALTO GRANDE - SP',
            'dnas'=>'1977-04-15 00:00:00',
            'naturalde'=>'AVARÉ - SP',
            'rg'=>'5.467.348-5',
            'cpf'=>NULL,
            'data_filiacao'=>'2012-06-30 00:00:00',
            'data_ordenacao'=>'2012-05-27 00:00:00',
            'obs'=>'Escrever na ID Ministerial no lugar da igreja MINISTERIO FIEL. Validade de 1 ano.'
        ] );
        
        Member::create( [
            'id'=>38,
            'titulo'=>'PASTOR',
            'nome'=>'AVELINO POMPEU DE SANTANA',
            'email'=>NULL,
            'igreja'=>'SAGRADAS MISSÕES',
            'dnas'=>'1960-06-04 00:00:00',
            'naturalde'=>'SÃO JOSE DE RIBAMAR',
            'rg'=>'406.725',
            'cpf'=>NULL,
            'data_filiacao'=>'1996-10-06 00:00:00',
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>62,
            'titulo'=>'PASTORA',
            'nome'=>'HILDA TAVARES',
            'email'=>NULL,
            'igreja'=>'SAGRADAS MISSÕES',
            'dnas'=>'1939-04-14 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'5.372.374-8',
            'cpf'=>'235.523.879-00',
            'data_filiacao'=>'1998-04-11 00:00:00',
            'data_ordenacao'=>'1998-04-11 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>126,
            'titulo'=>'PASTORA',
            'nome'=>'SILVANIA RODRIGUES YOSHII MACHADO',
            'email'=>NULL,
            'igreja'=>'SAGRADAS MISSÕES',
            'dnas'=>'1967-10-07 00:00:00',
            'naturalde'=>'URAÍ - PR',
            'rg'=>'4.828.426-4',
            'cpf'=>'559.114.559-00',
            'data_filiacao'=>'2001-04-15 00:00:00',
            'data_ordenacao'=>'2001-04-15 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>140,
            'titulo'=>'PASTOR',
            'nome'=>'GERALDO DE FREITAS',
            'email'=>'geraldo.freitas@gmail.com',
            'igreja'=>'SAGRADAS MISSÕES',
            'dnas'=>'1950-12-05 00:00:00',
            'naturalde'=>'PRIMEIRO DE MAIO',
            'rg'=>'1.246.545',
            'cpf'=>'189.085.789-00',
            'data_filiacao'=>'1994-07-09 00:00:00',
            'data_ordenacao'=>'1994-07-09 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>181,
            'titulo'=>'PASTORA',
            'nome'=>'MARCÍLIA SILVÉRIO FACUNDO',
            'email'=>NULL,
            'igreja'=>'SAGRADAS MISSÕES',
            'dnas'=>'1949-03-30 00:00:00',
            'naturalde'=>'POSSE DE REÇACA - SP',
            'rg'=>'5.381.695-9',
            'cpf'=>'772.487.839-00',
            'data_filiacao'=>'1994-07-09 00:00:00',
            'data_ordenacao'=>'1994-07-09 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>225,
            'titulo'=>'PASTOR',
            'nome'=>'ROBERTO BORN ANTUNES',
            'email'=>NULL,
            'igreja'=>'SAGRADAS MISSÕES',
            'dnas'=>'1935-02-22 00:00:00',
            'naturalde'=>'CURITIBA - PR',
            'rg'=>'205.588',
            'cpf'=>'137.100.289-49',
            'data_filiacao'=>'1982-07-25 00:00:00',
            'data_ordenacao'=>'1990-01-27 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>226,
            'titulo'=>'PASTOR',
            'nome'=>'ROBERTO ALVES DE SOUZA',
            'email'=>NULL,
            'igreja'=>'SAGRADAS MISSÕES',
            'dnas'=>'1950-09-04 00:00:00',
            'naturalde'=>'MARÍLIA - SP',
            'rg'=>'5.913.101',
            'cpf'=>'521.743.368-04',
            'data_filiacao'=>'1987-07-22 00:00:00',
            'data_ordenacao'=>'1976-11-09 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>238,
            'titulo'=>'PASTOR',
            'nome'=>'SAULO JOSÉ DA SILVA',
            'email'=>NULL,
            'igreja'=>'SAGRADAS MISSÕES',
            'dnas'=>'1954-10-06 00:00:00',
            'naturalde'=>'MANTENA - MG',
            'rg'=>'2.159.235',
            'cpf'=>'431.492.439-04',
            'data_filiacao'=>'1988-09-01 00:00:00',
            'data_ordenacao'=>'1987-02-15 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>242,
            'titulo'=>'PASTOR',
            'nome'=>'SERGIO APARECIDO PEREIRA DA CRUZ',
            'email'=>'msmsergiocruz@gmail.com',
            'igreja'=>'SAGRADAS MISSÕES',
            'dnas'=>'1974-08-28 00:00:00',
            'naturalde'=>'NOVA TEBA - PR',
            'rg'=>'6.134.679-1',
            'cpf'=>'908.373.809-44',
            'data_filiacao'=>'2002-10-26 00:00:00',
            'data_ordenacao'=>'2002-10-26 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>243,
            'titulo'=>'PASTORA',
            'nome'=>'MÔNICA LOPES DA CRUZ',
            'email'=>NULL,
            'igreja'=>'SAGRADAS MISSÕES',
            'dnas'=>'1975-08-04 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>NULL,
            'cpf'=>'039.301.679-05',
            'data_filiacao'=>'2002-10-26 00:00:00',
            'data_ordenacao'=>'2002-10-26 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>315,
            'titulo'=>'PASTORA',
            'nome'=>'MATILDE NATALINA CARNEIRO DE OLIVEIRA',
            'email'=>NULL,
            'igreja'=>'SAGRADAS MISSÕES',
            'dnas'=>'1946-12-25 00:00:00',
            'naturalde'=>'SÃO PAULO',
            'rg'=>'1033648-1',
            'cpf'=>NULL,
            'data_filiacao'=>'2008-10-21 00:00:00',
            'data_ordenacao'=>'2008-10-21 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>463,
            'titulo'=>'PASTORA',
            'nome'=>'ISABEL CRISTINA GARCIA DA SILVA',
            'email'=>NULL,
            'igreja'=>'SAGRADAS MISSÕES',
            'dnas'=>'1969-08-26 00:00:00',
            'naturalde'=>'APUCARANA',
            'rg'=>'5.982.672-7',
            'cpf'=>'754.914.439-72',
            'data_filiacao'=>'2011-03-22 00:00:00',
            'data_ordenacao'=>'1998-04-10 00:00:00',
            'obs'=>'FILIADA FRATERNA'
        ] );
        
        Member::create( [
            'id'=>561,
            'titulo'=>'PASTORA',
            'nome'=>'LIGIA MARIA DE MELO COSTA',
            'email'=>'ligiamelo77@hotmail.com',
            'igreja'=>'SAGRADAS MISSÕES',
            'dnas'=>'1977-03-21 00:00:00',
            'naturalde'=>'TELEMACO BORBA',
            'rg'=>'70116251',
            'cpf'=>'034.894.839-52',
            'data_filiacao'=>'2018-04-12 00:00:00',
            'data_ordenacao'=>'2018-04-12 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>562,
            'titulo'=>'PASTORA',
            'nome'=>'GISLENE INÁCIO CORRÊA HIRLE',
            'email'=>'gislene.hirle@hotmail.com',
            'igreja'=>'SAGRADAS MISSÕES',
            'dnas'=>'1973-04-01 00:00:00',
            'naturalde'=>'LONDRINA',
            'rg'=>'52311500',
            'cpf'=>'742.850.769-34',
            'data_filiacao'=>'2018-04-12 00:00:00',
            'data_ordenacao'=>'2018-04-12 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>160,
            'titulo'=>'PASTOR',
            'nome'=>'JONATAN FELIX DA SILVA',
            'email'=>'jonatanfs@hotmail.com',
            'igreja'=>'SAGRADAS MISSÕES - IPORÂ',
            'dnas'=>'1962-04-15 00:00:00',
            'naturalde'=>'UMUARAMA - PR',
            'rg'=>'3.640.361-6',
            'cpf'=>'502.339.049-72',
            'data_filiacao'=>'1998-10-11 00:00:00',
            'data_ordenacao'=>'2000-06-24 00:00:00',
            'obs'=>'site da igreja: www.sagradasmissoesipora.com.br'
        ] );
        
        Member::create( [
            'id'=>265,
            'titulo'=>'PASTORA',
            'nome'=>'NOEMIA MARTINS LOPES DA SILVA',
            'email'=>NULL,
            'igreja'=>'SAGRADAS MISSÕES - IPORÂ',
            'dnas'=>'1971-01-22 00:00:00',
            'naturalde'=>'CRUZEIRO DO OESTE',
            'rg'=>'5.394.949-5',
            'cpf'=>'718.114.009-49',
            'data_filiacao'=>'2000-06-24 00:00:00',
            'data_ordenacao'=>'2000-06-24 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>297,
            'titulo'=>'PASTOR',
            'nome'=>'JOSÉ BATISTA DE ARAÚJO JUNIOR',
            'email'=>'jbajunior2609@gmail.com',
            'igreja'=>'SAGRADAS MISSOES - JARDIM BANDEIRANTES',
            'dnas'=>'1967-09-26 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'42171280',
            'cpf'=>'587.363.009-00',
            'data_filiacao'=>'2008-04-05 00:00:00',
            'data_ordenacao'=>'2008-04-05 00:00:00',
            'obs'=>'leilajusti@hotmail.com'
        ] );
        
        Member::create( [
            'id'=>526,
            'titulo'=>'PASTORA',
            'nome'=>'LEILA VIEIRA JUSTI DE ARAÚJO',
            'email'=>'leilajusti@yahoo.com.br',
            'igreja'=>'SAGRADAS MISSOES - JARDIM BANDEIRANTES',
            'dnas'=>'1968-09-10 00:00:00',
            'naturalde'=>'LONDRINA',
            'rg'=>'41984309 SSP',
            'cpf'=>NULL,
            'data_filiacao'=>'2008-04-05 00:00:00',
            'data_ordenacao'=>'2008-04-05 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>397,
            'titulo'=>'PASTOR',
            'nome'=>'VAGNER YAMATO',
            'email'=>NULL,
            'igreja'=>'SAGRADAS MISSÕES - JARDIM BANDEIRANTES',
            'dnas'=>'1971-12-12 00:00:00',
            'naturalde'=>'TAMBOARA - PR',
            'rg'=>'5112180-5 SSPPR',
            'cpf'=>'852.914.989-00',
            'data_filiacao'=>'2011-06-28 00:00:00',
            'data_ordenacao'=>'2010-08-06 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>420,
            'titulo'=>'EVANGELISTA',
            'nome'=>'MARIA APARECIDA RIBEIRO DE OLIVEIRA',
            'email'=>NULL,
            'igreja'=>'SAGRADAS MISSÕES - VILA ISABEL',
            'dnas'=>'1952-08-30 00:00:00',
            'naturalde'=>'URAÍ - PR',
            'rg'=>'4.362.731-7',
            'cpf'=>'535.377.939-87',
            'data_filiacao'=>'2012-07-19 00:00:00',
            'data_ordenacao'=>'1991-08-05 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>298,
            'titulo'=>'PASTOR',
            'nome'=>'ANDRÉ JULIANO ZAMPIERI TEIXEIRA',
            'email'=>NULL,
            'igreja'=>'SAGRADAS MISSOES - VILA NOVA',
            'dnas'=>'1974-10-10 00:00:00',
            'naturalde'=>'ASTORGA',
            'rg'=>'56744053',
            'cpf'=>'879.503.599-00',
            'data_filiacao'=>'2008-04-05 00:00:00',
            'data_ordenacao'=>'2008-04-05 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>299,
            'titulo'=>'PASTORA',
            'nome'=>'IONE PINTO BARBOSA TEIXEIRA',
            'email'=>NULL,
            'igreja'=>'SAGRADAS MISSOES - VILA NOVA',
            'dnas'=>'1970-08-14 00:00:00',
            'naturalde'=>'IGUARAÇU',
            'rg'=>'6172974-3',
            'cpf'=>'841.800.729-04',
            'data_filiacao'=>'2008-04-05 00:00:00',
            'data_ordenacao'=>'2008-04-05 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>92,
            'titulo'=>'PASTORA',
            'nome'=>'ANA MARIA AMARAL DO NASCIMENTO',
            'email'=>NULL,
            'igreja'=>'SAGRADAS MISSÕES - VILA NOVA',
            'dnas'=>'1954-04-19 00:00:00',
            'naturalde'=>'BELÉM',
            'rg'=>'298.972',
            'cpf'=>'052.549.062.00',
            'data_filiacao'=>'1996-12-08 00:00:00',
            'data_ordenacao'=>'2008-12-31 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>554,
            'titulo'=>'PASTOR',
            'nome'=>'JAIRSON RODRIGUES DE MELLO',
            'email'=>'jairsonmello@hotmail.com',
            'igreja'=>'SAGRADAS MISSÕES - VILA NOVA',
            'dnas'=>'1971-01-10 00:00:00',
            'naturalde'=>'ARAPONGAS',
            'rg'=>'51701410',
            'cpf'=>'727.070.039-72',
            'data_filiacao'=>'2018-04-27 00:00:00',
            'data_ordenacao'=>'2017-12-10 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>525,
            'titulo'=>'PASTORA',
            'nome'=>'NEIVA HELENA FIORATTE DE ARAÚJO',
            'email'=>'neivaaraujo158@gmail.com',
            'igreja'=>'SAGRADAS MISSÕES JARDIM BANDEIRANTES',
            'dnas'=>NULL,
            'naturalde'=>'ARAPONGAS',
            'rg'=>'1960638 - SSPPR',
            'cpf'=>'326.840.419-34',
            'data_filiacao'=>'2016-03-05 00:00:00',
            'data_ordenacao'=>'2016-03-05 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>410,
            'titulo'=>'PASTOR',
            'nome'=>'PEDRO FACUNDO LIRA',
            'email'=>NULL,
            'igreja'=>'SAGRADAS MISSÕES JATOBÁ',
            'dnas'=>'1947-11-28 00:00:00',
            'naturalde'=>'ICÓ / CEARÁ',
            'rg'=>'5403596',
            'cpf'=>'062.230.443-72',
            'data_filiacao'=>'2012-01-22 00:00:00',
            'data_ordenacao'=>'2012-01-22 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>360,
            'titulo'=>'EVANGELISTA',
            'nome'=>'SIRLEY SARTÓRIO',
            'email'=>NULL,
            'igreja'=>'SINAIS DE FÉ',
            'dnas'=>'1983-05-23 00:00:00',
            'naturalde'=>'APUCARANA',
            'rg'=>'8872966-8',
            'cpf'=>'040.028.089-20',
            'data_filiacao'=>'2010-04-17 00:00:00',
            'data_ordenacao'=>'2005-04-17 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>361,
            'titulo'=>'PASTORA',
            'nome'=>'CINTIA ORTIZ RODRIGUES DE OLIVEIRA',
            'email'=>NULL,
            'igreja'=>'SINAIS DE FÉ',
            'dnas'=>'1974-11-03 00:00:00',
            'naturalde'=>'CURITIBA',
            'rg'=>'5934699-7',
            'cpf'=>'923.248.519-20',
            'data_filiacao'=>'2010-04-17 00:00:00',
            'data_ordenacao'=>'2005-04-17 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>362,
            'titulo'=>'PASTOR',
            'nome'=>'EDILSON RODRIGUES DE OLIVEIRA',
            'email'=>NULL,
            'igreja'=>'SINAIS DE FÉ',
            'dnas'=>'1979-09-08 00:00:00',
            'naturalde'=>'LONDRINA',
            'rg'=>'8275199-8',
            'cpf'=>'029.400.909-47',
            'data_filiacao'=>'2010-04-17 00:00:00',
            'data_ordenacao'=>'2010-04-17 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>364,
            'titulo'=>'PASTOR',
            'nome'=>'JOVELIANO RODRIGUES DA SILVA JÚNIOR',
            'email'=>NULL,
            'igreja'=>'SINAIS DE FÉ',
            'dnas'=>'1981-12-09 00:00:00',
            'naturalde'=>'LONDRINA',
            'rg'=>'7982598-0',
            'cpf'=>'038.569.139-47',
            'data_filiacao'=>'2010-04-17 00:00:00',
            'data_ordenacao'=>'2010-04-17 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>365,
            'titulo'=>'PASTOR',
            'nome'=>'MARCIO TIMPH RIBEIRO',
            'email'=>'ivanete_bitancout@hotmail.com',
            'igreja'=>'SINAIS DE FÉ',
            'dnas'=>'1983-12-07 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'8629223-8',
            'cpf'=>'038.283.269-86',
            'data_filiacao'=>'2010-04-14 00:00:00',
            'data_ordenacao'=>'2010-04-14 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>161,
            'titulo'=>'PASTOR',
            'nome'=>'JONATHAN FERREIRA SANTOS',
            'email'=>'pastorjonathan@valedabençao.org.br',
            'igreja'=>'VALE DA BÊNÇÃO',
            'dnas'=>NULL,
            'naturalde'=>NULL,
            'rg'=>NULL,
            'cpf'=>NULL,
            'data_filiacao'=>NULL,
            'data_ordenacao'=>NULL,
            'obs'=>'Escritório em Juazeiro do Norte (XX88)3512-6041'
        ] );
        
        Member::create( [
            'id'=>244,
            'titulo'=>'PASTOR',
            'nome'=>'SILAS MARCHIORI TOSTES',
            'email'=>NULL,
            'igreja'=>'VALE DA BÊNÇÃO',
            'dnas'=>'1960-03-29 00:00:00',
            'naturalde'=>'BATATAIS - SP',
            'rg'=>'8.521.901',
            'cpf'=>'022.547.338-00',
            'data_filiacao'=>'1988-09-18 00:00:00',
            'data_ordenacao'=>'1988-09-18 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>93,
            'titulo'=>'PASTOR',
            'nome'=>'ANANIAS DE SOUZA E SILVA',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1960-03-02 00:00:00',
            'naturalde'=>'LONDRINA',
            'rg'=>'3.624.545-0',
            'cpf'=>NULL,
            'data_filiacao'=>'1998-11-05 00:00:00',
            'data_ordenacao'=>'2011-06-04 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>261,
            'titulo'=>'PASTOR',
            'nome'=>'ZILDO JOSÉ FENATO',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1954-10-04 00:00:00',
            'naturalde'=>'APUCARANA - PR',
            'rg'=>'1.018.469',
            'cpf'=>'173.032.499-15',
            'data_filiacao'=>'1999-01-28 00:00:00',
            'data_ordenacao'=>'1999-01-28 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>258,
            'titulo'=>'PASTOR',
            'nome'=>'WILLIAN DOS SANTOS BARCELOS',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1971-07-10 00:00:00',
            'naturalde'=>'CABO FRIO - RJ',
            'rg'=>'08.938.426-7',
            'cpf'=>'015.108.887-05',
            'data_filiacao'=>'1998-09-24 00:00:00',
            'data_ordenacao'=>'1995-09-15 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>134,
            'titulo'=>'PASTOR',
            'nome'=>'FERNANDO SADOYAMA',
            'email'=>'fernandosadoyama@pop.com.br',
            'igreja'=>NULL,
            'dnas'=>NULL,
            'naturalde'=>NULL,
            'rg'=>NULL,
            'cpf'=>NULL,
            'data_filiacao'=>NULL,
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>135,
            'titulo'=>'PASTORA',
            'nome'=>'MARISE MIYUKI SADOYAMA',
            'email'=>'marisemst@hotmail.com',
            'igreja'=>NULL,
            'dnas'=>NULL,
            'naturalde'=>NULL,
            'rg'=>NULL,
            'cpf'=>NULL,
            'data_filiacao'=>NULL,
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>100,
            'titulo'=>'PASTOR',
            'nome'=>'ANTÔNIO BOHAJENKO',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1935-01-30 00:00:00',
            'naturalde'=>'PRUDENTÓPOLIS',
            'rg'=>'18.910.974',
            'cpf'=>NULL,
            'data_filiacao'=>NULL,
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>220,
            'titulo'=>'PASTOR',
            'nome'=>'PIO FRANCISCO DE CARVALHO',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1959-09-25 00:00:00',
            'naturalde'=>'CRUZEIRO D`OESTE - PR',
            'rg'=>'3.140.800-8',
            'cpf'=>'353.675.049-49',
            'data_filiacao'=>'1992-07-26 00:00:00',
            'data_ordenacao'=>'1990-04-28 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>91,
            'titulo'=>'PASTORA',
            'nome'=>'ANA LUIZA NOGUEIRA',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1955-02-26 00:00:00',
            'naturalde'=>'SERTANÓPOLIS',
            'rg'=>'1.274.145',
            'cpf'=>'822.704.909-59',
            'data_filiacao'=>'1998-12-14 00:00:00',
            'data_ordenacao'=>'1998-12-14 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>155,
            'titulo'=>'PASTOR',
            'nome'=>'JOÃO BATISTA SILVA DE HOLANDA',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1973-06-23 00:00:00',
            'naturalde'=>'JI-PARANÁ - RO',
            'rg'=>'454.719',
            'cpf'=>'421.485.452-72',
            'data_filiacao'=>'2004-07-25 00:00:00',
            'data_ordenacao'=>'2004-07-25 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>213,
            'titulo'=>'PASTOR',
            'nome'=>'PAULO PEREIRA DOS SANTOS',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1960-07-07 00:00:00',
            'naturalde'=>'SÃO JOÃO DO CAIUA - PR',
            'rg'=>'3.454.560-0',
            'cpf'=>'878.120.539-20',
            'data_filiacao'=>'1995-11-04 00:00:00',
            'data_ordenacao'=>'1995-11-04 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>152,
            'titulo'=>'EVANGELISTA',
            'nome'=>'JANE APARECIDA DE PAULA',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1959-05-16 00:00:00',
            'naturalde'=>'CORNÉLIO PROCÓPIO',
            'rg'=>'12.272.053',
            'cpf'=>'003.680.658-71',
            'data_filiacao'=>'2002-10-26 00:00:00',
            'data_ordenacao'=>'2002-10-26 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>170,
            'titulo'=>'EVANGELISTA',
            'nome'=>'KÁTIA CRISTINA VENTURA MARTINS',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1969-12-23 00:00:00',
            'naturalde'=>'AVARÍ - SP',
            'rg'=>'4.203.776-1',
            'cpf'=>'727.420.119-00',
            'data_filiacao'=>'2002-10-26 00:00:00',
            'data_ordenacao'=>'2002-10-26 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>171,
            'titulo'=>'PASTORA',
            'nome'=>'LAIZ APARECIDA DIONISIO OLIVEIRA',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1967-12-10 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'4.236.895-4',
            'cpf'=>'682.054.499-53',
            'data_filiacao'=>'2000-12-16 00:00:00',
            'data_ordenacao'=>'2000-12-16 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>183,
            'titulo'=>'PASTORA',
            'nome'=>'MARIA APARECIDA INÁCIO DE MEDEIROS',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1953-01-18 00:00:00',
            'naturalde'=>'JUNQUEROPOLIS - SP',
            'rg'=>'3.506.046',
            'cpf'=>'879.588.729-68',
            'data_filiacao'=>'2003-06-14 00:00:00',
            'data_ordenacao'=>'2002-07-16 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>185,
            'titulo'=>'PASTORA',
            'nome'=>'MARIA CLEUSA COSTA ESPINOSA',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1958-08-21 00:00:00',
            'naturalde'=>NULL,
            'rg'=>'4.359.383-8',
            'cpf'=>'672.688.629-20',
            'data_filiacao'=>'2003-02-16 00:00:00',
            'data_ordenacao'=>'2003-02-16 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>188,
            'titulo'=>'PASTORA',
            'nome'=>'MARIA FERNANDA ANTUNES SAMPAIO',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1943-08-15 00:00:00',
            'naturalde'=>'PORTUGAL',
            'rg'=>'476.242',
            'cpf'=>'236.218.509-53',
            'data_filiacao'=>'2000-12-16 00:00:00',
            'data_ordenacao'=>'2000-12-16 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>212,
            'titulo'=>'PASTOR',
            'nome'=>'PAULO HENRIQUE DA SILVA',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>NULL,
            'naturalde'=>NULL,
            'rg'=>NULL,
            'cpf'=>NULL,
            'data_filiacao'=>NULL,
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>218,
            'titulo'=>'PASTOR',
            'nome'=>'PÉRSIUS ANTUNES SAMPAIO',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1963-08-27 00:00:00',
            'naturalde'=>'SERTANÓPOLIS',
            'rg'=>'3.035.050-2',
            'cpf'=>'455.768.829-20',
            'data_filiacao'=>'2000-12-16 00:00:00',
            'data_ordenacao'=>'2000-12-16 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>219,
            'titulo'=>'PASTORA',
            'nome'=>'SHEILA RODRIGUES SAMPAIO',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1967-10-04 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'3.844.230-9',
            'cpf'=>'642.421.619-72',
            'data_filiacao'=>'2000-12-16 00:00:00',
            'data_ordenacao'=>'2000-12-16 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>222,
            'titulo'=>'PASTORA',
            'nome'=>'REALVA ACORDI JESUÍNO',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1970-11-09 00:00:00',
            'naturalde'=>'PALOTINA - PR',
            'rg'=>'024.869-0',
            'cpf'=>'781.016.039-72',
            'data_filiacao'=>'2000-12-16 00:00:00',
            'data_ordenacao'=>'2000-12-16 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>232,
            'titulo'=>'PASTOR',
            'nome'=>'ROGÉRIO ESPOLADOR',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>NULL,
            'naturalde'=>NULL,
            'rg'=>NULL,
            'cpf'=>NULL,
            'data_filiacao'=>NULL,
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>239,
            'titulo'=>'PASTOR',
            'nome'=>'SAULO VALENTIM DE OLIVEIRA',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1976-04-03 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'6.082.153-4',
            'cpf'=>'730.859.879-91',
            'data_filiacao'=>'2001-10-14 00:00:00',
            'data_ordenacao'=>'2001-10-14 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>290,
            'titulo'=>'PASTOR',
            'nome'=>'CLÁUDIO ROBERTO GIBRIN',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1963-12-06 00:00:00',
            'naturalde'=>'SAO PAULO',
            'rg'=>'1487709-6',
            'cpf'=>'365.532.989-04',
            'data_filiacao'=>NULL,
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>291,
            'titulo'=>'PASTORA',
            'nome'=>'LUCIENE GOUVÊA GIBRIN',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1969-11-20 00:00:00',
            'naturalde'=>'LONDRINA',
            'rg'=>'4663764-0',
            'cpf'=>'673.656.989-34',
            'data_filiacao'=>NULL,
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>292,
            'titulo'=>'PASTOR',
            'nome'=>'CARLOS CESAR DE OLIVEIRA',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>NULL,
            'naturalde'=>NULL,
            'rg'=>NULL,
            'cpf'=>NULL,
            'data_filiacao'=>NULL,
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>300,
            'titulo'=>'PASTOR',
            'nome'=>'NILTON (TITO)',
            'email'=>'niltonzerbini@sercomtel.com.br',
            'igreja'=>NULL,
            'dnas'=>NULL,
            'naturalde'=>NULL,
            'rg'=>NULL,
            'cpf'=>NULL,
            'data_filiacao'=>NULL,
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>307,
            'titulo'=>'PASTOR',
            'nome'=>'PAULO FERNANDO CONSTATANTINO',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1961-07-07 00:00:00',
            'naturalde'=>NULL,
            'rg'=>NULL,
            'cpf'=>NULL,
            'data_filiacao'=>'1993-02-20 00:00:00',
            'data_ordenacao'=>'1993-01-10 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>308,
            'titulo'=>'PASTOR',
            'nome'=>'RODRIGO PAIVA TURQUINO',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1974-11-15 00:00:00',
            'naturalde'=>NULL,
            'rg'=>NULL,
            'cpf'=>NULL,
            'data_filiacao'=>NULL,
            'data_ordenacao'=>'2005-12-18 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>15,
            'titulo'=>'PASTOR',
            'nome'=>'LEONEL PEDRO RAMOS',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1940-05-22 00:00:00',
            'naturalde'=>'POUSO ALTO - MG',
            'rg'=>'857.974',
            'cpf'=>'176.484.089-53',
            'data_filiacao'=>'1991-07-28 00:00:00',
            'data_ordenacao'=>'1991-07-28 00:00:00',
            'obs'=>'telefone da loja 3233-5135'
        ] );
        
        Member::create( [
            'id'=>95,
            'titulo'=>'PASTOR',
            'nome'=>'ANANIAS LOBACK',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1945-08-16 00:00:00',
            'naturalde'=>'CAMPO MOURÃO',
            'rg'=>'4420',
            'cpf'=>NULL,
            'data_filiacao'=>'1988-04-29 00:00:00',
            'data_ordenacao'=>'1969-08-16 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>96,
            'titulo'=>'PASTORA',
            'nome'=>'LILIA VIEIRA LOBACK',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1940-03-03 00:00:00',
            'naturalde'=>'SÃO GONÇALO - RJ',
            'rg'=>'043-303',
            'cpf'=>'041.041.532-49',
            'data_filiacao'=>'1988-04-09 00:00:00',
            'data_ordenacao'=>'1969-08-16 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>131,
            'titulo'=>'PASTORA',
            'nome'=>'ELISAMAR DE SOUZA GOUVEIA',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1954-06-11 00:00:00',
            'naturalde'=>'TAUÁ - CE',
            'rg'=>'8.958.485-0',
            'cpf'=>'038.338.442-72',
            'data_filiacao'=>'2002-02-23 00:00:00',
            'data_ordenacao'=>'2002-02-23 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>197,
            'titulo'=>'PASTORA',
            'nome'=>'NEIDE JONAS DA SILVA',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1960-07-07 00:00:00',
            'naturalde'=>'CAMBARÁ - PR',
            'rg'=>'5.833.130-0',
            'cpf'=>'388.850.189-04',
            'data_filiacao'=>'2002-03-30 00:00:00',
            'data_ordenacao'=>'2002-02-23 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>187,
            'titulo'=>'PASTORA',
            'nome'=>'MARIA DA CONCEIÇÃO NASCIMENTO',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1947-11-15 00:00:00',
            'naturalde'=>'ALEGRE - ES',
            'rg'=>'6.022.103-5',
            'cpf'=>NULL,
            'data_filiacao'=>NULL,
            'data_ordenacao'=>'1999-03-07 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>515,
            'titulo'=>'PASTOR',
            'nome'=>'JOSÉ A. PERAÇOLI MORENO',
            'email'=>'principal@apcuniversity.education',
            'igreja'=>NULL,
            'dnas'=>NULL,
            'naturalde'=>NULL,
            'rg'=>NULL,
            'cpf'=>NULL,
            'data_filiacao'=>NULL,
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>206,
            'titulo'=>'PASTOR',
            'nome'=>'PAULO CLAUDENIR DE MORAES',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1949-10-08 00:00:00',
            'naturalde'=>'PORTO FERREIRA - SP',
            'rg'=>'8.955.587',
            'cpf'=>'207.886.908-25',
            'data_filiacao'=>'1993-07-24 00:00:00',
            'data_ordenacao'=>'1993-07-24 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>196,
            'titulo'=>'PASTOR',
            'nome'=>'MOISÉS CLARO DE SOUZA',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1930-02-16 00:00:00',
            'naturalde'=>'JUAZEIRO - BA',
            'rg'=>'5.477.680-6',
            'cpf'=>'061.640.728-91',
            'data_filiacao'=>'1997-02-09 00:00:00',
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>516,
            'titulo'=>'PASTORA',
            'nome'=>'MARIA DO PATROCINIO BARCELI SILVA',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>NULL,
            'naturalde'=>NULL,
            'rg'=>NULL,
            'cpf'=>NULL,
            'data_filiacao'=>NULL,
            'data_ordenacao'=>NULL,
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>103,
            'titulo'=>'PASTOR',
            'nome'=>'CÁCIO JOSÉ DE AVELAR',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1963-06-22 00:00:00',
            'naturalde'=>'SETE LAGOAS',
            'rg'=>'M2.363.228',
            'cpf'=>'456.914.286-91',
            'data_filiacao'=>'1999-04-24 00:00:00',
            'data_ordenacao'=>'1999-12-10 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>105,
            'titulo'=>'PASTOR',
            'nome'=>'CARLOS ALEXANDRE DE AVELAR',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1963-06-22 00:00:00',
            'naturalde'=>'SETE LAGOAS',
            'rg'=>'M2.363.227',
            'cpf'=>'475.605.176-68',
            'data_filiacao'=>'1999-02-10 00:00:00',
            'data_ordenacao'=>'1999-02-10 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>132,
            'titulo'=>'PASTOR',
            'nome'=>'ERMILO JOEL PACHECO DA SILVA',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1961-09-05 00:00:00',
            'naturalde'=>'CAXIAS DO SUL -RS',
            'rg'=>'102.282.031-8',
            'cpf'=>'344.213.940-68',
            'data_filiacao'=>'1991-07-28 00:00:00',
            'data_ordenacao'=>'1991-07-28 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>257,
            'titulo'=>'PASTOR',
            'nome'=>'WAGNER ALCANTARA DA SILVA',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1957-12-11 00:00:00',
            'naturalde'=>'BELO HORIZONTE',
            'rg'=>'989.060',
            'cpf'=>'291.589.316-00',
            'data_filiacao'=>'1999-04-24 00:00:00',
            'data_ordenacao'=>'1999-02-10 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>214,
            'titulo'=>'PASTOR',
            'nome'=>'PEDRO EUGÊNIO DA SILVA',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1954-05-03 00:00:00',
            'naturalde'=>'LONDRINA - PR',
            'rg'=>'830.353',
            'cpf'=>'238.467.809-44',
            'data_filiacao'=>'2000-12-16 00:00:00',
            'data_ordenacao'=>'2000-12-16 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>245,
            'titulo'=>'PASTOR',
            'nome'=>'SILAS PEREIRA DE SOUZA',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1958-02-17 00:00:00',
            'naturalde'=>'FORTALEZA - CE',
            'rg'=>'1.544.832',
            'cpf'=>'240.177.369-04',
            'data_filiacao'=>'1991-01-02 00:00:00',
            'data_ordenacao'=>'1990-12-31 00:00:00',
            'obs'=>NULL
        ] );
        
        Member::create( [
            'id'=>250,
            'titulo'=>'PASTORA',
            'nome'=>'VALDIRENE ALBERTTI BEZERRA',
            'email'=>NULL,
            'igreja'=>NULL,
            'dnas'=>'1971-06-14 00:00:00',
            'naturalde'=>'NOVA PEBAS - PR',
            'rg'=>'4.472.750-1',
            'cpf'=>'633.852.529-20',
            'data_filiacao'=>'2000-12-16 00:00:00',
            'data_ordenacao'=>'2000-12-16 00:00:00',
            'obs'=>NULL
        ] );

    }
}