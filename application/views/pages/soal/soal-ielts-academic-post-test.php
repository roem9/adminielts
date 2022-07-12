<?php $this->load->view("_partials/header")?>
    
    <style>
        .table table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        .form-inline {
            display: flex;
            flex-flow: row wrap;
            align-items: center;
        }

        .question {
            font-size: 16px;
            font-weight: bold;
        }

        .highlight {
            background-color: red;
        }
    </style>

    <form action="<?= base_url()?>soal/add_jawaban_ielts" method="post" id="formIelts">
        <div id="soal_tes" style="display:nones">
            <div class="wrapper" id="elementtoScrollToID">
                <div class="sticky-top">
                    <?php $this->load->view("_partials/navbar-header")?>
                </div>
                <div class="page-wrapper" id="">
                    <div class="page-body">
                        <div class="container-xl">
                            <div class="sesi-listening" style="display:nones">
                                <div class="shadow card mb-3">
                                    <div class="card-body">
                                        <p>Peserta : <?= $peserta['first_name'] . " " . $peserta['last_name']?></p>
                                        <p>Email : <?= $peserta['email']?></p>
                                        <p>Benar Listening : <?= $peserta['nilai_listening']?></p>
                                    </div>
                                </div>
                                <div class="shadow card mb-3">
                                    <div class="card-body">
                                        <center>
                                            <audio id="audio-1" class="audio" data-id="1"><source src="<?= base_url('assets/myaudio/listening-academic-general-post-test.mp3?t='.time())?>" type="audio/mpeg"></audio>
                                            <progress id="seekbar-1" value="0" max="1" style="width:100%;"></progress><br>
                                            <button class="btn btn-success btnAudio" data-id="1" type="button"><?= tablerIcon("player-play", "")?> play</button>
                                            <p><small class="text-danger"><i>note : The audio can only be played once</i></small></p>
                                        </center>
                                    </div>
                                </div>

                                <div class="shadow card mb-3 soal">
                                    <div class="card-body ps-4">
                                        <center><b>IELTS LISTENING POST-TEST ACADEMIC</b></center>
                                        <p class="question">
                                            SECTION 1 | Questions 1-10<br>
                                            Questions 1-10<br>
                                            Complete the table below.<br>
                                            Write NO MORE THAN TWO WORDS AND/OR A NUMBER for each answer.
                                        </p>

                                        <center><span><h3>SHORT STAY ACCOMMODATION</h3></span></center>
                                        <p>
                                            Example:<br>
                                            Family name – <b>Mackinlay</b>
                                        </p>
                                        <center>
                                            <table class="table" style="width:100%">
                                                <tr>
                                                    <td>First name</td>
                                                    <td><b>1)</b> <?= soal_isian_ielts("jawaban_listening[0]", $listening_reading[0][1], $listening_reading[0][2])?></td>
                                                </tr>
                                                <tr>
                                                    <td>Country of origin</td>
                                                    <td><b>2)</b> <?= soal_isian_ielts("jawaban_listening[1]", $listening_reading[1][1], $listening_reading[1][2])?></td>
                                                </tr>
                                                <tr>
                                                    <td>Date of arrival</td>
                                                    <td><b>3)</b> <?= soal_isian_ielts("jawaban_listening[2]", $listening_reading[2][1], $listening_reading[2][2])?></td>
                                                </tr>
                                                <tr>
                                                    <td>Number of tenants</td>
                                                    <td><b>4)</b> <?= soal_isian_ielts("jawaban_listening[3]", $listening_reading[3][1], $listening_reading[3][2])?></td>
                                                </tr>
                                                <tr>
                                                    <td>Length of stay</td>
                                                    <td>2 weeks</td>
                                                </tr>
                                                <tr>
                                                    <td>Purpose of visit</td>
                                                    <td><b>5)</b> <?= soal_isian_ielts("jawaban_listening[4]", $listening_reading[4][1], $listening_reading[4][2])?></td>
                                                </tr>
                                                <tr>
                                                    <td>Type of accommodation</td>
                                                    <td><b>6)</b> <?= soal_isian_ielts("jawaban_listening[5]", $listening_reading[5][1], $listening_reading[5][2])?></td>
                                                </tr>
                                                <tr>
                                                    <td>Number of bedrooms</td>
                                                    <td>one or two</td>
                                                </tr>
                                                <tr>
                                                    <td>Car parking</td>
                                                    <td>off street and <b>7)</b> <?= soal_isian_ielts("jawaban_listening[6]", $listening_reading[6][1], $listening_reading[6][2])?></td>
                                                </tr>
                                                <tr>
                                                    <td>Other requirements </td>
                                                    <td>near <b>8)</b> <?= soal_isian_ielts("jawaban_listening[7]", $listening_reading[7][1], $listening_reading[7][2])?></td>
                                                </tr>
                                                <tr>
                                                    <td>Name of town</td>
                                                    <td><b>9)</b> <?= soal_isian_ielts("jawaban_listening[8]", $listening_reading[8][1], $listening_reading[8][2])?> beach</td>
                                                </tr>
                                                <tr>
                                                    <td>Client’s email</td>
                                                    <td>smac13@hotmail.com</td>
                                                </tr>
                                                <tr>
                                                    <td>Price range</td>
                                                    <td>up to <b>10)</b>$ <?= soal_isian_ielts("jawaban_listening[9]", $listening_reading[9][1], $listening_reading[9][2])?> a week</td>
                                                </tr>
                                            </table>
                                        </center>
                                    </div>
                                </div>
        
                                <div class="shadow card mb-3">
                                    <div class="card-body ps-4">
                                        <p class="question">
                                            SECTION 2 | Questions 11-20<br>
                                            Questions 11-14<br>
                                            Choose the correct letter, A, В оr С.
                                        </p>

                                        <?php
                                            $data_soal_11_14 = [
                                                [ 
                                                    "no" => 11, 
                                                    "soal" => "Refreshments will be served",
                                                    "pilihan" => [
                                                        "<b>A.</b> at the front counter.",
                                                        "<b>B.</b> in the lobby.",
                                                        "<b>C.</b> at the back of the hall.",
                                                    ],
                                                    "name" => "jawaban_listening[10]",
                                                    "jawaban" => $listening_reading[10][1],
                                                    "status" => $listening_reading[10][2],
                                                ],
                                                [ 
                                                    "no" => 12, 
                                                    "soal" => "Nick Noble advertised",
                                                    "pilihan" => [
                                                        "<b>A.</b> on the radio.",
                                                        "<b>B.</b> on a billboard.",
                                                        "<b>C.</b> in the newspaper.",
                                                    ],
                                                    "name" => "jawaban_listening[11]",
                                                    "jawaban" => $listening_reading[11][1],
                                                    "status" => $listening_reading[11][2],
                                                ],
                                                [ 
                                                    "no" => 13, 
                                                    "soal" => "The original number of founding members was about",
                                                    "pilihan" => [
                                                        "<b>A.</b> 12",
                                                        "<b>B.</b> 20",
                                                        "<b>C.</b> 200",
                                                    ],
                                                    "name" => "jawaban_listening[12]",
                                                    "jawaban" => $listening_reading[12][1],
                                                    "status" => $listening_reading[12][2],
                                                ],
                                                [ 
                                                    "no" => 14, 
                                                    "soal" => "The club provides activities primarily for reasonably fit",
                                                    "pilihan" => [
                                                        "<b>A.</b> males up to 75.",
                                                        "<b>B.</b> females with young children.",
                                                        "<b>C.</b> males and females of any age.",
                                                    ],
                                                    "name" => "jawaban_listening[13]",
                                                    "jawaban" => $listening_reading[13][1],
                                                    "status" => $listening_reading[13][2],
                                                ],
                                            ];
                                        ?>

                                        <?php foreach ($data_soal_11_14 as $data_soal) :?>
                                            <?= soal_pg_ielts($data_soal)?>
                                        <?php endforeach;?>
                                    </div>
                                </div>

                                <div class="shadow card mb-3 soal">
                                    <div class="card-body ps-4">
                                        <p class="question">
                                            Questions 15-20<br>
                                            Complete the table below.<br>
                                            Write NO MORE THAN ONE WORD AND/OR A NUMBER for each answer.
                                        </p>

                                        <center>
                                            <table class="table" style="width:100%">
                                                <tr>
                                                    <th>Activity </th>
                                                    <th>Day(s)</th>
                                                    <th>Duration</th>
                                                    <th>Contact Person</th>
                                                </tr>
                                                <tr>
                                                    <td><b>15)</b><?= soal_isian_ielts("jawaban_listening[14]", $listening_reading[14][1], $listening_reading[14][2])?></td>
                                                    <td>Tuesday & Saturday</td>
                                                    <td>About 3-5 hours</td>
                                                    <td>Coordinator</td>
                                                </tr>
                                                <tr>
                                                    <td><b>16)</b> <?= soal_isian_ielts("jawaban_listening[15]", $listening_reading[15][1], $listening_reading[15][2])?></td>
                                                    <td>Thursday & Sunday</td>
                                                    <td>Up to 3 hours</td>
                                                    <td><b>17)</b> <?= soal_isian_ielts("jawaban_listening[16]", $listening_reading[16][1], $listening_reading[16][2])?></td>
                                                </tr>
                                                <tr>
                                                    <td>Wanderers</td>
                                                    <td>Sunday</td>
                                                    <td><b>18)</b> <?= soal_isian_ielts("jawaban_listening[17]", $listening_reading[17][1], $listening_reading[17][2])?></td>
                                                    <td>Leader</td>
                                                </tr>
                                                <tr>
                                                    <td><b>19)</b> <?= soal_isian_ielts("jawaban_listening[18]", $listening_reading[18][1], $listening_reading[18][2])?> weekends</td>
                                                    <td>Saturday & Sunday</td>
                                                    <td>All weekend</td>
                                                    <td><b>20)</b> <?= soal_isian_ielts("jawaban_listening[19]", $listening_reading[19][1], $listening_reading[19][2])?></td>
                                                </tr>
                                            </table>
                                        </center>
                                    </div>
                                </div>

                                <div class="shadow card mb-3 soal">
                                    <div class="card-body ps-4">
                                        <p class="question">
                                            Questions 21-26<br>
                                            Complete the notes below.<br>
                                            Write NO MORE THAN TWO WORDS for each answer.
                                        </p>
                                        <center><h3>“Globalisation and Educational Change”</h3></center>
                                        <p>
                                            GEC 692 New Code: <b>21)</b> <?= soal_isian_ielts("jawaban_listening[20]", $listening_reading[20][1], $listening_reading[20][2])?>
                                            Aims – Analysis of educational problems arising from globalisation
                                        </p>

                                        <p>
                                            Chance to research and <b>22)</b> <?= soal_isian_ielts("jawaban_listening[21]", $listening_reading[21][1], $listening_reading[21][2])?> progress of educational change
                                            Investigate influence of culture and <b>23)</b> <?= soal_isian_ielts("jawaban_listening[22]", $listening_reading[22][1], $listening_reading[22][2])?> on education
                                            Argue advantages and disadvantages of reorganisation of public education in own country with regard to globalisation
                                        </p>

                                        <p>
                                            Consider the <b>24)</b> <?= soal_isian_ielts("jawaban_listening[23]", $listening_reading[23][1], $listening_reading[23][2])?> of globalisation on diversity of national curricula across richer and poorer countries<br>
                                            Assignment #l = Power Point Presentation (ungraded) + <b>25)</b> Written Review (<?= soal_isian_ielts("jawaban_listening[24]", $listening_reading[24][1], $listening_reading[24][2])?>)
                                            Assignment #2 = take part in Seminar (2O%) + <b>26)</b> <?= soal_isian_ielts("jawaban_listening[25]", $listening_reading[25][1], $listening_reading[25][2])?>_ (50%)
                                        </p>
                                    </div>
                                </div>

                                <div class="shadow card mb-3 soal">
                                    <div class="card-body ps-4">
                                        <p class="question">
                                            Questions 27-30<br>
                                            Complete the table below.<br>
                                            Write NO MORE THAN TWO WORDS AND/OR A NUMBER for each answer.
                                        </p>
                                        
                                        <center>
                                            <table class="table" style="width:100%">
                                                <tr>
                                                    <td>Author</td>
                                                    <td>Title</td>
                                                    <td>Date</td>
                                                </tr>
                                                <tr>
                                                    <td><b>27)</b> <?= soal_isian_ielts("jawaban_listening[26]", $listening_reading[26][1], $listening_reading[26][2])?></td>
                                                    <td>Comparative Education</td>
                                                    <td>2007</td>
                                                </tr>
                                                <tr>
                                                    <td>Elliot</td>
                                                    <td>Educational Issues of the New Millenium</td>
                                                    <td><b>28)</b> <?= soal_isian_ielts("jawaban_listening[27]", $listening_reading[27][1], $listening_reading[27][2])?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>29)</b> <?= soal_isian_ielts("jawaban_listening[28]", $listening_reading[28][1], $listening_reading[28][2])?></td>
                                                    <td>Education and Globalisation</td>
                                                    <td>2009</td>
                                                </tr>
                                                <tr>
                                                    <td>York</td>
                                                    <td>Globalisation and <b>30)</b> <?= soal_isian_ielts("jawaban_listening[29]", $listening_reading[29][1], $listening_reading[29][2])?></td>
                                                    <td>2010</td>
                                                </tr>
                                            </table>
                                        </center>
                                    </div>
                                </div>

                                <div class="shadow card mb-3 soal">
                                    <div class="card-body ps-4">
                                        <p class="question">
                                            SECTION 3 | Questions 31-40<br>
                                            Questions 31-40<br>
                                            Complete the summary below<br>
                                            Write NO MORE THAN TWO WORDS for each answer
                                        </p>
                                        <p>Every day the human body is fighting off <b>31)</b> <?= soal_isian_ielts("jawaban_listening[30]", $listening_reading[30][1], $listening_reading[30][2])?> by destructive pathogens. A person in good health has natural protection in the form of an immune system which works best against familiar microorganisms which may have been encountered during a previous <b>32])</b> <?= soal_isian_ielts("jawaban_listening[31]", $listening_reading[31][1], $listening_reading[31][2])?> or passed on by the mother before or after birth.</p>
                                        <p>Vaccination is a way to cause <b>33)</b> <?= soal_isian_ielts("jawaban_listening[32]", $listening_reading[32][1], $listening_reading[32][2])?> immunisation by introducing a small amount of pathogen into the body – just enough for the body’s <b>34)</b> <?= soal_isian_ielts("jawaban_listening[33]", $listening_reading[33][1], $listening_reading[33][2])?> to react by making antibodies. Passive immunisation can be used as a way of treating someone who is already sick. Proteins from animal <b>35)</b> <?= soal_isian_ielts("jawaban_listening[34]", $listening_reading[34][1], $listening_reading[34][2])?> are introduced into the patient to give him the necessary antibodies to fight the disease.</p>
                                        <p>Dr. Edward Jenner observed that people who had suffered and recovered from a serious disease called smallpox did not get it again. He also noted that victims of a milder disease, cowpox, which they caught from <b>36)</b> <?= soal_isian_ielts("jawaban_listening[35]", $listening_reading[35][1], $listening_reading[35][2])?>, were immune to smallpox. He carried out a successful <b>37)</b> <?= soal_isian_ielts("jawaban_listening[36]", $listening_reading[36][1], $listening_reading[36][2])?> by deliberately giving a child cowpox in order to make him immune to smallpox. Antibodies are produced by micro-organisms to fight bacterial <b>38)</b> <?= soal_isian_ielts("jawaban_listening[37]", $listening_reading[37][1], $listening_reading[37][2])?>. Y-shaped antibodies can prevent antigens and repair the <b>39)</b> <?= soal_isian_ielts("jawaban_listening[38]", $listening_reading[38][1], $listening_reading[38][2])?>. The agglutination can be seen by <b>40)</b> <?= soal_isian_ielts("jawaban_listening[39]", $listening_reading[39][1], $listening_reading[39][2])?> eyes to determine patient’s condition. </p>
                                    </div>
                                </div>
                            </div>

                            <div class="sesi-reading" style="display:nones">
                                <div class="shadow card mb-3">
                                    <div class="card-body">
                                        <p>Peserta : <?= $peserta['first_name'] . " " . $peserta['last_name']?></p>
                                        <p>Email : <?= $peserta['email']?></p>
                                        <p>Benar Reading : <?= $peserta['nilai_reading']?></p>
                                    </div>
                                </div>
                                <div class="shadow card mb-3">
                                    <?php
                                        $text = "
                                        <p><center><h3>Glass Capturing the Dance of Light</h3></center></p>
                                        <span>A</span><br>
                                        <p class='reading-1'>Glass, in one form or another, has long been in noble service to humans. As one of the most widely used manufactured materials, and certainly the most versatile, it can be as imposing as a telescope mirror the width of a tennis court or as small and simple as a marble rolling across the dirt. The uses of this adaptable material have been broadened dramatically by new technologies glass fibre optics — more than eight million miles — carrying telephone and television signals across nations, glass ceramics serving as the nose cones of missiles and as crowns for teeth; tiny glass beads taking radiation doses inside the body to specific organs, even a new type of glass fashioned of nuclear waste in order to dispose of that unwanted material.</p>
                                        <span>B</span><br>
                                        <p class='reading-2'>On the horizon are optical computers. These could store programs and process information by means of light – pulses from tiny lasers – rather than electrons. And the pulses would travel over glass fibres, not copper wire. These machines could function hundreds of times faster than today’s electronic computers and hold vastly more information. Today fibre optics are used to obtain a clearer image of smaller and smaller objects than ever before – even bacterial viruses. A new generation of optical instruments is emerging that can provide detailed imaging of the inner workings of cells. It is the surge in fibre optic use and in liquid crystal displays that have set the U.S. glass industry (a 16 billion dollar business employing some 150,000 workers) to building new plants to meet demand. </p>
                                        <span>C</span><br>
                                        <p class='reading-3'>But it is not only in technology and commerce that glass has widened its horizons. The use of glass as art, a tradition spins back at least to Roman times, is also booming. Nearly everywhere, it seems, men and women are blowing glass and creating works of art. «I didn’t sell a piece of glass until 1975,» Dale Chihuly said, smiling, for in the 18 years since the end of the dry spell, he has become one of the most financially successful artists of the 20th century. He now has a new commission – a glass sculpture for the headquarters building of a pizza company – for which his fee is half a million dollars. </p>
                                        <span>D</span><br>
                                        <p class='reading-4'>But not all the glass technology that touches our lives is ultra-modern. Consider the simple light bulb; at the turn of the century most light bulbs were hand-blown, and the cost of one was equivalent to half a day’s pay for the average worker. In effect, the invention of the ribbon machine by Corning in the 1920s lighted a nation. The price of a bulb plunged. Small wonder that the machine has been called one of the great mechanical achievements of all time. Yet it is very simple: a narrow ribbon of molten glass travels over a moving belt of steel in which there are holes. The glass sags through the holes and into waiting moulds. Puffs of compressed air then shape the glass. In this way, the envelope of a light bulb is made by a single machine at the rate of 66,000 an hour, as compared with 1,200 a day produced by a team of four glassblowers.</p>
                                        <span>E</span><br>
                                        <p class='reading-5'>The secret of the versatility of glass lies in its interior structure. Although it is rigid, and thus like a solid, the atoms are arranged in a random disordered fashion, characteristic of a liquid. In the melting process, the atoms in the raw materials are disturbed from their normal position in the molecular structure; before they can find their way back to crystalline arrangements the glass cools. This looseness in molecular structure gives the material what engineers call tremendous “formability” which allows technicians to tailor glass to whatever they need.</p>
                                        <span>F</span><br>
                                        <p class='reading-6'>Today, scientists continue to experiment with new glass mixtures and building designers test their imaginations with applications of special types of glass. A London architect, Mike Davies, sees even more dramatic buildings using molecular chemistry. “Glass is the great building material of the future, the «dynamic skin»,’ he said. “Think of glass that has been treated to react to electric currents going through it, glass that will change from clear to opaque at the push of a button, that gives you instant curtains. Think of how the tall buildings in New York could perform a symphony of colours as the glass in them is made to change colours instantly.” Glass as instant curtains is available now, but the cost is exorbitant. As for the glass changing colours instantly, that may come true. Mike Davies’s vision may indeed be on the way to fulfilment.</p>
                                        ";
                                    ?>
                                    <div class="card-body ps-4">
                                        <p class="question">
                                            SECTION ONE | QUESTIONS 1-13<br>
                                            PASSAGE ONE (Questions 1-13)<br>
                                            You should spend about 20 minutes on Questions 1-13 which are based on Reading Passage One below.
                                        </p>

                                        <div class="row">
                                            <div class="col-7">
                                                <div class="card">
                                                    <div class="card-body ps-4" style="height: 600px; overflow: scroll">
                                                        <?= $text?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="card">
                                                    <div class="card-body ps-4" style="height: 600px; overflow: scroll">
                                                        <p class="question">
                                                            QUESTIONS 1-5<br>
                                                            Reading Passage One has six paragraphs (A-F). Choose the most suitable heading/or each paragraph from the list of headings below. Write the appropriate numbers (i-x) in boxes 1-5 on your answer sheet. Paragraph A has been done for you as an example.<br>
                                                            NB There are more headings than paragraphs so you will not use all of them.<br>
                                                            You may use any heading more at once.<br>
                                                            Example <br>
                                                            Paragraph A	(Answer: x)
                                                        </p>

                                                        <table class="table">
                                                            <tr>
                                                                <td>
                                                                    <b>List of Headings</b><br>
                                                                    <b>i.</b>  Growth in the market for glass crafts<br>
                                                                    <b>ii.</b> Computers and their dependence on glass<br>
                                                                    <b>iii.</b>What makes glass so adaptable<br>
                                                                    <b>iv.</b> Historical development of glass<br>
                                                                    <b>v.</b>  Scientists’ dreams cost millions<br>
                                                                    <b>vi.</b> Architectural experiments with glass<br>
                                                                    <b>vii.</b>Glass art galleries flourish<br>
                                                                    <b>viii.</b>Exciting innovations in fiber optics<br>
                                                                    <b>ix.</b>  A former glass technology<br>
                                                                    <b>x.</b>   Everyday uses of glass<br>
                                                                </td>
                                                            </tr>
                                                        </table>

                                                        <p><b>1.</b> Paragraph B <?= soal_isian_ielts("jawaban_reading[0]", $listening_reading[40][1], $listening_reading[40][2])?></p>
                                                        <p><b>2.</b> Paragraph C <?= soal_isian_ielts("jawaban_reading[1]", $listening_reading[41][1], $listening_reading[41][2])?></p>
                                                        <p><b>3.</b> Paragraph D <?= soal_isian_ielts("jawaban_reading[2]", $listening_reading[42][1], $listening_reading[42][2])?></p>
                                                        <p><b>4.</b> Paragraph E <?= soal_isian_ielts("jawaban_reading[3]", $listening_reading[43][1], $listening_reading[43][2])?></p>
                                                        <p><b>5.</b> Paragraph F <?= soal_isian_ielts("jawaban_reading[4]", $listening_reading[44][1], $listening_reading[44][2])?></p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="shadow card mb-3">
                                    <?php
                                        $text = "
                                        <p><center><h3>Glass Capturing the Dance of Light</h3></center></p>
                                        <span>A</span><br>
                                        <p class='reading-7'>Glass, in one form or another, has long been in noble service to humans. As one of the most widely used manufactured materials, and certainly the most versatile, it can be as imposing as a telescope mirror the width of a tennis court or as small and simple as a marble rolling across the dirt. The uses of this adaptable material have been broadened dramatically by new technologies glass fibre optics — more than eight million miles — carrying telephone and television signals across nations, glass ceramics serving as the nose cones of missiles and as crowns for teeth; tiny glass beads taking radiation doses inside the body to specific organs, even a new type of glass fashioned of nuclear waste in order to dispose of that unwanted material.</p>
                                        <span>B</span><br>
                                        <p class='reading-8'>On the horizon are optical computers. These could store programs and process information by means of light – pulses from tiny lasers – rather than electrons. And the pulses would travel over glass fibres, not copper wire. These machines could function hundreds of times faster than today’s electronic computers and hold vastly more information. Today fibre optics are used to obtain a clearer image of smaller and smaller objects than ever before – even bacterial viruses. A new generation of optical instruments is emerging that can provide detailed imaging of the inner workings of cells. It is the surge in fibre optic use and in liquid crystal displays that have set the U.S. glass industry (a 16 billion dollar business employing some 150,000 workers) to building new plants to meet demand. </p>
                                        <span>C</span><br>
                                        <p class='reading-9'>But it is not only in technology and commerce that glass has widened its horizons. The use of glass as art, a tradition spins back at least to Roman times, is also booming. Nearly everywhere, it seems, men and women are blowing glass and creating works of art. «I didn’t sell a piece of glass until 1975,» Dale Chihuly said, smiling, for in the 18 years since the end of the dry spell, he has become one of the most financially successful artists of the 20th century. He now has a new commission – a glass sculpture for the headquarters building of a pizza company – for which his fee is half a million dollars. </p>
                                        <span>D</span><br>
                                        <p class='reading-10'>But not all the glass technology that touches our lives is ultra-modern. Consider the simple light bulb; at the turn of the century most light bulbs were hand-blown, and the cost of one was equivalent to half a day’s pay for the average worker. In effect, the invention of the ribbon machine by Corning in the 1920s lighted a nation. The price of a bulb plunged. Small wonder that the machine has been called one of the great mechanical achievements of all time. Yet it is very simple: a narrow ribbon of molten glass travels over a moving belt of steel in which there are holes. The glass sags through the holes and into waiting moulds. Puffs of compressed air then shape the glass. In this way, the envelope of a light bulb is made by a single machine at the rate of 66,000 an hour, as compared with 1,200 a day produced by a team of four glassblowers.</p>
                                        <span>E</span><br>
                                        <p class='reading-11'>The secret of the versatility of glass lies in its interior structure. Although it is rigid, and thus like a solid, the atoms are arranged in a random disordered fashion, characteristic of a liquid. In the melting process, the atoms in the raw materials are disturbed from their normal position in the molecular structure; before they can find their way back to crystalline arrangements the glass cools. This looseness in molecular structure gives the material what engineers call tremendous “formability” which allows technicians to tailor glass to whatever they need.</p>
                                        <span>F</span><br>
                                        <p class='reading-12'>Today, scientists continue to experiment with new glass mixtures and building designers test their imaginations with applications of special types of glass. A London architect, Mike Davies, sees even more dramatic buildings using molecular chemistry. “Glass is the great building material of the future, the «dynamic skin»,’ he said. “Think of glass that has been treated to react to electric currents going through it, glass that will change from clear to opaque at the push of a button, that gives you instant curtains. Think of how the tall buildings in New York could perform a symphony of colours as the glass in them is made to change colours instantly.” Glass as instant curtains is available now, but the cost is exorbitant. As for the glass changing colours instantly, that may come true. Mike Davies’s vision may indeed be on the way to fulfilment.</p>
                                        ";
                                    ?>
                                    <div class="card-body ps-4">
                                        <p class="question">
                                            SECTION ONE | QUESTIONS 1-13<br>
                                            PASSAGE ONE (Questions 1-13)<br>
                                            You should spend about 20 minutes on Questions 1-13 which are based on Reading Passage One below.
                                        </p>

                                        <div class="row">
                                            <div class="col-7">
                                                <div class="card">
                                                    <div class="card-body ps-4" style="height: 600px; overflow: scroll">
                                                        <?= $text?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="card">
                                                    <div class="card-body ps-4" style="height: 600px; overflow: scroll">
                                                        <p class="question">
                                                            QUESTIONS 6-8<br>
                                                            The diagram below shows the principle of Coming’s ribbon machine.<br>
                                                            Label the diagram by selecting NO MORE THAN THREE WORDS from the Reading Passage One to fill each numbered space.
                                                        </p>
                                                        <p><i>Write your answers in boxes 6-8 on your answer sheet.</i></p>

                                                        <img src="<?= base_url()?>assets/img/academic_post_test_6_8.png" alt="">

                                                        <p><b>6.</b> <?= soal_isian_ielts("jawaban_reading[5]", $listening_reading[45][1], $listening_reading[45][2])?></p>
                                                        <p><b>7.</b> <?= soal_isian_ielts("jawaban_reading[6]", $listening_reading[46][1], $listening_reading[46][2])?></p>
                                                        <p><b>8.</b> <?= soal_isian_ielts("jawaban_reading[7]", $listening_reading[47][1], $listening_reading[47][2])?></p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="shadow card mb-3">
                                    <?php
                                        $text = "
                                        <p><center><h3>Glass Capturing the Dance of Light</h3></center></p>
                                        <span>A</span><br>
                                        <p class='reading-13'>Glass, in one form or another, has long been in noble service to humans. As one of the most widely used manufactured materials, and certainly the most versatile, it can be as imposing as a telescope mirror the width of a tennis court or as small and simple as a marble rolling across the dirt. The uses of this adaptable material have been broadened dramatically by new technologies glass fibre optics — more than eight million miles — carrying telephone and television signals across nations, glass ceramics serving as the nose cones of missiles and as crowns for teeth; tiny glass beads taking radiation doses inside the body to specific organs, even a new type of glass fashioned of nuclear waste in order to dispose of that unwanted material.</p>
                                        <span>B</span><br>
                                        <p class='reading-14'>On the horizon are optical computers. These could store programs and process information by means of light – pulses from tiny lasers – rather than electrons. And the pulses would travel over glass fibres, not copper wire. These machines could function hundreds of times faster than today’s electronic computers and hold vastly more information. Today fibre optics are used to obtain a clearer image of smaller and smaller objects than ever before – even bacterial viruses. A new generation of optical instruments is emerging that can provide detailed imaging of the inner workings of cells. It is the surge in fibre optic use and in liquid crystal displays that have set the U.S. glass industry (a 16 billion dollar business employing some 150,000 workers) to building new plants to meet demand. </p>
                                        <span>C</span><br>
                                        <p class='reading-15'>But it is not only in technology and commerce that glass has widened its horizons. The use of glass as art, a tradition spins back at least to Roman times, is also booming. Nearly everywhere, it seems, men and women are blowing glass and creating works of art. «I didn’t sell a piece of glass until 1975,» Dale Chihuly said, smiling, for in the 18 years since the end of the dry spell, he has become one of the most financially successful artists of the 20th century. He now has a new commission – a glass sculpture for the headquarters building of a pizza company – for which his fee is half a million dollars. </p>
                                        <span>D</span><br>
                                        <p class='reading-16'>But not all the glass technology that touches our lives is ultra-modern. Consider the simple light bulb; at the turn of the century most light bulbs were hand-blown, and the cost of one was equivalent to half a day’s pay for the average worker. In effect, the invention of the ribbon machine by Corning in the 1920s lighted a nation. The price of a bulb plunged. Small wonder that the machine has been called one of the great mechanical achievements of all time. Yet it is very simple: a narrow ribbon of molten glass travels over a moving belt of steel in which there are holes. The glass sags through the holes and into waiting moulds. Puffs of compressed air then shape the glass. In this way, the envelope of a light bulb is made by a single machine at the rate of 66,000 an hour, as compared with 1,200 a day produced by a team of four glassblowers.</p>
                                        <span>E</span><br>
                                        <p class='reading-17'>The secret of the versatility of glass lies in its interior structure. Although it is rigid, and thus like a solid, the atoms are arranged in a random disordered fashion, characteristic of a liquid. In the melting process, the atoms in the raw materials are disturbed from their normal position in the molecular structure; before they can find their way back to crystalline arrangements the glass cools. This looseness in molecular structure gives the material what engineers call tremendous “formability” which allows technicians to tailor glass to whatever they need.</p>
                                        <span>F</span><br>
                                        <p class='reading-18'>Today, scientists continue to experiment with new glass mixtures and building designers test their imaginations with applications of special types of glass. A London architect, Mike Davies, sees even more dramatic buildings using molecular chemistry. “Glass is the great building material of the future, the «dynamic skin»,’ he said. “Think of glass that has been treated to react to electric currents going through it, glass that will change from clear to opaque at the push of a button, that gives you instant curtains. Think of how the tall buildings in New York could perform a symphony of colours as the glass in them is made to change colours instantly.” Glass as instant curtains is available now, but the cost is exorbitant. As for the glass changing colours instantly, that may come true. Mike Davies’s vision may indeed be on the way to fulfilment.</p>
                                        ";
                                    ?>
                                    <div class="card-body ps-4">
                                        <p class="question">
                                            SECTION ONE | QUESTIONS 1-13<br>
                                            PASSAGE ONE (Questions 1-13)<br>
                                            You should spend about 20 minutes on Questions 1-13 which are based on Reading Passage One below.
                                        </p>

                                        <div class="row">
                                            <div class="col-7">
                                                <div class="card">
                                                    <div class="card-body ps-4" style="height: 600px; overflow: scroll">
                                                        <?= $text?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="card">
                                                    <div class="card-body ps-4" style="height: 600px; overflow: scroll">
                                                        <p class="question">
                                                            QUESTIONS 9-13<br>
                                                            Look at the list below of the uses of glass.<br>
                                                            According to the passage, state whether these uses exist today, will exist in the future or are not mentioned by the writer.<br>
                                                            In boxes 9-13 write:
                                                        </p>
                                                        <p>
                                                            <b>A</b> if the uses exist today<br>
                                                            <b>B</b> if the uses will exist in the future<br>
                                                            <b>C</b> if the uses are not mentioned by the writer
                                                        </p>

                                                        <p><b>9.</b> Dental Fittings <?= soal_isian_ielts("jawaban_reading[8]", $listening_reading[48][1], $listening_reading[48][2])?></p>
                                                        <p><b>10.</b> Optical Computers <?= soal_isian_ielts("jawaban_reading[9]", $listening_reading[49][1], $listening_reading[49][2])?></p>
                                                        <p><b>11.</b> Sculptures <?= soal_isian_ielts("jawaban_reading[10]", $listening_reading[50][1], $listening_reading[50][2])?></p>
                                                        <p><b>12.</b> Fashions <?= soal_isian_ielts("jawaban_reading[11]", $listening_reading[51][1], $listening_reading[51][2])?></p>
                                                        <p><b>13.</b> Curtains <?= soal_isian_ielts("jawaban_reading[12]", $listening_reading[52][1], $listening_reading[52][2])?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="shadow card mb-3">
                                    <?php
                                        $text = "
                                            <p><center><h3>Why Some Women Cross the Finish Line Ahead of Men</h3></center></p>
                                            <p><i>RECRUITMENT</i></p>
                                            <p><i>The course is tougher but women are staying the distance, reports Andrew Crisp.</i></p>
                                            <span>A</span><br>
                                            <p class='reading-19'>Women who apply for jobs in middle or senior management have a higher success rate than men, according to an employment survey. But of course far fewer of them apply for these positions. The study, by recruitment consultants NB Selection, shows that while one in six men who appear on interview shortlists get jobs, the figure rises to one in four for women.</p>
                                            <span>B</span><br>
                                            <p class='reading-20'>The study concentrated on applications for management positions in the $45,000 to $110,000 salary range and found that women are more successful than men in both the private and public sectors Dr Elisabeth Marx from London-based NB Selection described the findings as encouraging for women, in that they send a positive message to them to apply for interesting management positions. But she added, “We should not lose sight of the fact that significantly fewer women apply for senior positions in comparison with men.”</p>
                                            <span>C</span><br>
                                            <p class='reading-21'>Reasons for higher success rates among women are difficult to isolate. One explanation suggested is that if a woman candidate manages to get on a shortlist, then she has probably already proved herself to be an exceptional candidate. Dr Marx said that when women apply for positions they tend to be better qualified than their male counterparts but are more selective and conservative in their job search. Women tend to research thoroughly before applying for positions or attending interviews. Men, on the other hand, seem to rely on their ability to sell themselves and to convince employers that any shortcomings they have will not prevent them from doing a good job.</p>
                                            <span>D</span><br>
                                            <p class='reading-22'>Managerial and executive progress made by women is confirmed by the annual survey of boards of directors carried out by Korn/Ferry/Carre/ Orban International. This year the survey shows a doubling of the number of women serving as non-executive directors compared with the previous year. However, progress remains painfully slow and there were still only 18 posts filled by women out of a total of 354 nonexecutive positions surveyed. Hilary Sears, a partner with Korn/Ferry, said, “Women have raised the level of grades we are employed in but we have still not broken through barriers to the top.”</p>
                                            <span>E</span><br>
                                            <p class='reading-23'>In Europe a recent feature of corporate life in the recession has been the delayering of management structures. Sears said that this has halted progress for women in as much as de-layering has taken place either where women are working or in layers they aspire to. Sears also noted a positive trend from the recession, which has been the growing number of women who have started up on their own.</p>
                                            <span>F</span><br>
                                            <p class='reading-24'>In business as a whole, there are a number of factors encouraging the prospect of greater equality in the workforce. Demographic trends suggest that the number of women going into employment is steadily increasing. In addition a far greater number of women are now passing through higher education, making them better qualified to move into management positions.</p>
                                            <span>G</span><br>
                                            <p class='reading-25'>Organisations such as the European Women’s Management Development Network provide a range of opportunities for women to enhance their skills and contacts. Through a series of both pan-European and national workshops and conferences the barriers to women in employment are being broken down. However, Ariane Berthoin Antal, director of the International Institute for Organisational Change of Archamps in France, said that there is only anecdotal evidence of changes in recruitment patterns. And she said, “It’s still so hard for women to even get on to shortlists -there are so many hurdles and barriers.’ Antal agreed that there have been some positive signs but said “Until there is a belief among employers, until they value the difference, nothing will change.” </p>
                                        ";
                                    ?>
                                    <div class="card-body ps-4">
                                        <p class="question">
                                            SECTION TWO | QUESTIONS 14-27<br>
                                            PASSAGE TWO (Questions 14-27)
                                        </p>

                                        <div class="row">
                                            <div class="col-7">
                                                <div class="card">
                                                    <div class="card-body ps-4" style="height: 600px; overflow: scroll">
                                                        <?= $text?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="card">
                                                    <div class="card-body ps-4" style="height: 600px; overflow: scroll">
                                                        <p class="question">
                                                            QUESTIONS 14-19<br>
                                                            Reading Passage Two has seven paragraphs (A-G). State which paragraph discusses each of the points below.<br>
                                                            Write the appropriate letter (A-G) in boxes 14-19 on your answer sheet.
                                                        </p>
                                                        <table class="table" style="width: 100%">
                                                            <tr>
                                                                <td><i>Example</i></td>
                                                                <td><i>Answer</i></td>
                                                            </tr>
                                                            <tr>
                                                                <td>The salary range studied in the NB Selection survey.</td>
                                                                <td><i><b>B</b></i></td>
                                                            </tr>
                                                        </table>

                                                        <p><b>14.</b> The drawbacks of current company restructuring patterns. <?= soal_isian_ielts("jawaban_reading[13]", $listening_reading[53][1], $listening_reading[53][2])?></p>
                                                        <p><b>15.</b> Associations that provide support for proffesional women. <?= soal_isian_ielts("jawaban_reading[14]", $listening_reading[54][1], $listening_reading[54][2])?></p>
                                                        <p><b>16.</b> The success rate of female job applicants for management positions. <?= soal_isian_ielts("jawaban_reading[15]", $listening_reading[55][1], $listening_reading[55][2])?></p>
                                                        <p><b>17.</b> Male and female approaches to job applications. <?= soal_isian_ielts("jawaban_reading[16]", $listening_reading[56][1], $listening_reading[56][2])?></p>
                                                        <p><b>18.</b> Reasons why more women are being employed in the business sector. <?= soal_isian_ielts("jawaban_reading[17]", $listening_reading[57][1], $listening_reading[57][2])?></p>
                                                        <p><b>19.</b> The improvement in female numbers on company management structures. <?= soal_isian_ielts("jawaban_reading[18]", $listening_reading[58][1], $listening_reading[58][2])?></p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="shadow card mb-3">
                                    <?php
                                        $text = "
                                            <p><center><h3>Why Some Women Cross the Finish Line Ahead of Men</h3></center></p>
                                            <p><i>RECRUITMENT</i></p>
                                            <p><i>The course is tougher but women are staying the distance, reports Andrew Crisp.</i></p>
                                            <span>A</span><br>
                                            <p class='reading-26'>Women who apply for jobs in middle or senior management have a higher success rate than men, according to an employment survey. But of course far fewer of them apply for these positions. The study, by recruitment consultants NB Selection, shows that while one in six men who appear on interview shortlists get jobs, the figure rises to one in four for women.</p>
                                            <span>B</span><br>
                                            <p class='reading-27'>The study concentrated on applications for management positions in the $45,000 to $110,000 salary range and found that women are more successful than men in both the private and public sectors Dr Elisabeth Marx from London-based NB Selection described the findings as encouraging for women, in that they send a positive message to them to apply for interesting management positions. But she added, “We should not lose sight of the fact that significantly fewer women apply for senior positions in comparison with men.”</p>
                                            <span>C</span><br>
                                            <p class='reading-28'>Reasons for higher success rates among women are difficult to isolate. One explanation suggested is that if a woman candidate manages to get on a shortlist, then she has probably already proved herself to be an exceptional candidate. Dr Marx said that when women apply for positions they tend to be better qualified than their male counterparts but are more selective and conservative in their job search. Women tend to research thoroughly before applying for positions or attending interviews. Men, on the other hand, seem to rely on their ability to sell themselves and to convince employers that any shortcomings they have will not prevent them from doing a good job.</p>
                                            <span>D</span><br>
                                            <p class='reading-29'>Managerial and executive progress made by women is confirmed by the annual survey of boards of directors carried out by Korn/Ferry/Carre/ Orban International. This year the survey shows a doubling of the number of women serving as non-executive directors compared with the previous year. However, progress remains painfully slow and there were still only 18 posts filled by women out of a total of 354 nonexecutive positions surveyed. Hilary Sears, a partner with Korn/Ferry, said, “Women have raised the level of grades we are employed in but we have still not broken through barriers to the top.”</p>
                                            <span>E</span><br>
                                            <p class='reading-30'>In Europe a recent feature of corporate life in the recession has been the delayering of management structures. Sears said that this has halted progress for women in as much as de-layering has taken place either where women are working or in layers they aspire to. Sears also noted a positive trend from the recession, which has been the growing number of women who have started up on their own.</p>
                                            <span>F</span><br>
                                            <p class='reading-31'>In business as a whole, there are a number of factors encouraging the prospect of greater equality in the workforce. Demographic trends suggest that the number of women going into employment is steadily increasing. In addition a far greater number of women are now passing through higher education, making them better qualified to move into management positions.</p>
                                            <span>G</span><br>
                                            <p class='reading-32'>Organisations such as the European Women’s Management Development Network provide a range of opportunities for women to enhance their skills and contacts. Through a series of both pan-European and national workshops and conferences the barriers to women in employment are being broken down. However, Ariane Berthoin Antal, director of the International Institute for Organisational Change of Archamps in France, said that there is only anecdotal evidence of changes in recruitment patterns. And she said, “It’s still so hard for women to even get on to shortlists -there are so many hurdles and barriers.’ Antal agreed that there have been some positive signs but said “Until there is a belief among employers, until they value the difference, nothing will change.” </p>
                                        ";
                                    ?>
                                    <div class="card-body ps-4">
                                        <p class="question">
                                            SECTION TWO | QUESTIONS 14-27<br>
                                            PASSAGE TWO (Questions 14-27)
                                        </p>

                                        <div class="row">
                                            <div class="col-7">
                                                <div class="card">
                                                    <div class="card-body ps-4" style="height: 600px; overflow: scroll">
                                                        <?= $text?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="card">
                                                    <div class="card-body ps-4" style="height: 600px; overflow: scroll">
                                                        <p class="question">
                                                            QUESTIONS 20-23<br>
                                                            The author makes reference to three consultants in the Reading Passage Two.<br>
                                                            Which of the list of points below do these consultants make? In boxes 20-23 write:
                                                        </p>
                                                        <p>
                                                            <b>M</b> if the point is made by Dr Marx<br>
                                                            <b>S</b> if the point is made by Hilary Sears<br>
                                                            <b>A</b> if the point is made by Ariane Berthoin Antal
                                                        </p>

                                                        <p><b>20.</b> Selection procedures do not favor women. <?= soal_isian_ielts("jawaban_reading[19]", $listening_reading[59][1], $listening_reading[59][2])?></p>
                                                        <p><b>21.</b> The number of female-run business is increasing. <?= soal_isian_ielts("jawaban_reading[20]", $listening_reading[60][1], $listening_reading[60][2])?></p>
                                                        <p><b>22.</b> Male applicants exceed female applicants for top post. <?= soal_isian_ielts("jawaban_reading[21]", $listening_reading[61][1], $listening_reading[61][2])?></p>
                                                        <p><b>23.</b> Women hold higher positions now than they used to. <?= soal_isian_ielts("jawaban_reading[22]", $listening_reading[62][1], $listening_reading[62][2])?></p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="shadow card mb-3">
                                    <?php
                                        $text = "
                                            <p><center><h3>Why Some Women Cross the Finish Line Ahead of Men</h3></center></p>
                                            <p><i>RECRUITMENT</i></p>
                                            <p><i>The course is tougher but women are staying the distance, reports Andrew Crisp.</i></p>
                                            <span>A</span><br>
                                            <p class='reading-33'>Women who apply for jobs in middle or senior management have a higher success rate than men, according to an employment survey. But of course far fewer of them apply for these positions. The study, by recruitment consultants NB Selection, shows that while one in six men who appear on interview shortlists get jobs, the figure rises to one in four for women.</p>
                                            <span>B</span><br>
                                            <p class='reading-34'>The study concentrated on applications for management positions in the $45,000 to $110,000 salary range and found that women are more successful than men in both the private and public sectors Dr Elisabeth Marx from London-based NB Selection described the findings as encouraging for women, in that they send a positive message to them to apply for interesting management positions. But she added, “We should not lose sight of the fact that significantly fewer women apply for senior positions in comparison with men.”</p>
                                            <span>C</span><br>
                                            <p class='reading-35'>Reasons for higher success rates among women are difficult to isolate. One explanation suggested is that if a woman candidate manages to get on a shortlist, then she has probably already proved herself to be an exceptional candidate. Dr Marx said that when women apply for positions they tend to be better qualified than their male counterparts but are more selective and conservative in their job search. Women tend to research thoroughly before applying for positions or attending interviews. Men, on the other hand, seem to rely on their ability to sell themselves and to convince employers that any shortcomings they have will not prevent them from doing a good job.</p>
                                            <span>D</span><br>
                                            <p class='reading-36'>Managerial and executive progress made by women is confirmed by the annual survey of boards of directors carried out by Korn/Ferry/Carre/ Orban International. This year the survey shows a doubling of the number of women serving as non-executive directors compared with the previous year. However, progress remains painfully slow and there were still only 18 posts filled by women out of a total of 354 nonexecutive positions surveyed. Hilary Sears, a partner with Korn/Ferry, said, “Women have raised the level of grades we are employed in but we have still not broken through barriers to the top.”</p>
                                            <span>E</span><br>
                                            <p class='reading-37'>In Europe a recent feature of corporate life in the recession has been the delayering of management structures. Sears said that this has halted progress for women in as much as de-layering has taken place either where women are working or in layers they aspire to. Sears also noted a positive trend from the recession, which has been the growing number of women who have started up on their own.</p>
                                            <span>F</span><br>
                                            <p class='reading-38'>In business as a whole, there are a number of factors encouraging the prospect of greater equality in the workforce. Demographic trends suggest that the number of women going into employment is steadily increasing. In addition a far greater number of women are now passing through higher education, making them better qualified to move into management positions.</p>
                                            <span>G</span><br>
                                            <p class='reading-39'>Organisations such as the European Women’s Management Development Network provide a range of opportunities for women to enhance their skills and contacts. Through a series of both pan-European and national workshops and conferences the barriers to women in employment are being broken down. However, Ariane Berthoin Antal, director of the International Institute for Organisational Change of Archamps in France, said that there is only anecdotal evidence of changes in recruitment patterns. And she said, “It’s still so hard for women to even get on to shortlists -there are so many hurdles and barriers.’ Antal agreed that there have been some positive signs but said “Until there is a belief among employers, until they value the difference, nothing will change.” </p>
                                        ";
                                    ?>
                                    <div class="card-body ps-4">
                                        <p class="question">
                                            SECTION TWO | QUESTIONS 14-27<br>
                                            PASSAGE TWO (Questions 14-27)
                                        </p>

                                        <div class="row">
                                            <div class="col-7">
                                                <div class="card">
                                                    <div class="card-body ps-4" style="height: 600px; overflow: scroll">
                                                        <?= $text?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="card">
                                                    <div class="card-body ps-4" style="height: 600px; overflow: scroll">
                                                        <p class="question">
                                                            Questions 24-27<br>
                                                            Using NO MORE THAN THREE WORDS answer the following questions.<br>
                                                            Write your answers in boxes 24-27 on your answer sheet.
                                                        </p>
                                                        
                                                        <p><b>24.</b> What change has three been in the number of women in top management positions detailed in the annual survey? <?= soal_isian_ielts("jawaban_reading[23]", $listening_reading[63][1], $listening_reading[63][2])?></p>
                                                        <p><b>25.</b> What aspect of company structuring has disadvantaged women? <?= soal_isian_ielts("jawaban_reading[24]", $listening_reading[64][1], $listening_reading[64][2])?></p>
                                                        <p><b>26.</b> What information tells us that more women are working nowadays? <?= soal_isian_ielts("jawaban_reading[25]", $listening_reading[65][1], $listening_reading[65][2])?></p>
                                                        <p><b>27.</b> Which group of people should change their attitude to recruitment? <?= soal_isian_ielts("jawaban_reading[26]", $listening_reading[66][1], $listening_reading[66][2])?></p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="shadow card mb-3">
                                    <?php
                                        $text = "
                                            <p><center><h3>Population Viability Analysis</h3></center></p>
                                            <span><b>Part A</b></span>
                                            <p class='reading-40'>To make political decisions about the extent and type of forestry in a region it is important to understand the consequences of those decisions. One tool for assessing the impact of forestry on the ecosystem is population viability analysis (PVA). This is a tool for predicting the probability that a species will become extinct in a particular region over a specific period. It has been successfully used in the United States to provide input into resource exploitation decisions and assist wildlife managers and there is now enormous potential for using population viability to assist wildlife management in Australia’s forests.</p>
                                            <p class='reading-41'>A species becomes extinct when the last individual dies. This observation is a useful starting point for any discussion of extinction as it highlights the role of luck and chance in the extinction process. To make a prediction about extinction we need to understand the processes that can contribute to it and these fall into four broad categories which are discussed below.</p>
                                            <span><b>Part B</b></span><br>
                                            <b>A</b>
                                            <p class='reading-42'>Early attempts to predict population viability were based on demographic uncertainty Whether an individual survives from one year to the next will largely be a matter of chance. Some pairs may produce several young in a single year while others may produce none in that same year. Small populations will fluctuate enormously because of the random nature of birth and death and these chance fluctuations can cause species extinctions even if, on average, the population size should increase. Taking only this uncertainty of ability to reproduce into account, extinction is unlikely if the number of individuals in a population is above about 50 and the population is growing.</p>
                                            <b>B</b>
                                            <p class='reading-43'>Small populations cannot avoid a certain amount of inbreeding. This is particularly true if there is a very small number of one sex. For example, if there are only 20 individuals of a species and only one is a male, all future individuals in the species must be descended from that one male. For most animal species such individuals are less likely to survive and reproduce. Inbreeding increases the chance of extinction.</p>
                                            <b>C</b>
                                            <p class='reading-44'>Variation within a species is the raw material upon which natural selection acts. Without genetic variability a species lacks the capacity to evolve and cannot adapt to changes in its environment or to new predators and new diseases. The loss of genetic diversity associated with reductions in population size will contribute to the likelihood of extinction.</p>
                                            <b>D</b>
                                            <p class='reading-45'>Recent research has shown that other factors need to be considered. Australia’s environment fluctuates enormously from year to year. These fluctuations add yet another degree of uncertainty to the survival of many species. Catastrophes such as fire, flood, drought or epidemic may reduce population sizes to a small fraction of their average level. When allowance is made for these two additional elements of uncertainty the population size necessary to be confident of persistence for a few hundred years may increase to several thousand.</p>
                                            <span><b>Part C</b></span><br>
                                            <p class='reading-46'>Beside these processes we need to bear in mind the distribution of a population. A species that occurs in five isolated places each containing 20 individuals will not have the same probability of extinction as a species with a single population of 100 individuals in a single locality.</p>
                                            <p class='reading-47'>Where logging occurs (that is, the cutting down of forests for timber) forest- dependent creatures in that area will be forced to leave. Ground-dwelling herbivores may return within a decade. However, arboreal marsupials (that is animals which live in trees) may not recover to pre-logging densities for over a century. As more forests are logged, animal population sizes will be reduced further. Regardless of the theory or model that we choose, a reduction in population size decreases the genetic diversity of a population and increases the probability of extinction because of any or all of the processes listed above. It is therefore a scientific fact that increasing the area that is loaded in any region will increase the probability that forest-dependent animals will become extinct.</p>
                                        ";
                                    ?>
                                    <div class="card-body ps-4">
                                        <p class="question">
                                            SECTION THREE | QUESTIONS 28-40<br>
                                            PASSAGE THREE (Questions 28-40)<br>
                                            You should spend about 20 minutes on Questions 28-40 which are based on Reading Passage Three below).
                                        </p>

                                        <div class="row">
                                            <div class="col-7">
                                                <div class="card">
                                                    <div class="card-body ps-4" style="height: 600px; overflow: scroll">
                                                        <?= $text?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="card">
                                                    <div class="card-body ps-4" style="height: 600px; overflow: scroll">
                                                        <p class="question">
                                                            Questions 28-31<br>
                                                            Do the following statements agree with the views of the writer in Part A of Reading Passage Three?
                                                        </p>
                                                        <p>
                                                            In boxes 28-31 on your answer sheet write<br>
                                                            <b>YES</b> if the statement agrees with the writer
                                                            <b>NO</b> if the statement contradicts the writer
                                                            <b>NOT GIVEN</b> if it is impossible to say what the writer thinks about this
                                                        </p>

                                                        <table class="table">
                                                            <tr>
                                                                <td>Example</td>
                                                                <td>Answer</td>
                                                            </tr>
                                                            <tr>
                                                                <td>A link exist between the consequences of decisions and the decision making process itself.</td>
                                                                <td><b>YES</b></td>
                                                            </tr>
                                                        </table>
                                                        
                                                        <?php
                                                            $data_soal_28_31 = [
                                                                [ 
                                                                    "no" => 28, 
                                                                    "soal" => "Scientists are interested in the effect of forestry on native animals.",
                                                                    "pilihan" => [
                                                                        "YES",
                                                                        "NO",
                                                                        "NOT GIVEN",
                                                                    ],
                                                                    "name" => "jawaban_reading[27]",
                                                                    "jawaban" => $listening_reading[67][1],
                                                                    "status" => $listening_reading[67][2],
                                                                ],
                                                                [ 
                                                                    "no" => 29, 
                                                                    "soal" => "PVA has been used in Australia for many years.",
                                                                    "pilihan" => [
                                                                        "YES",
                                                                        "NO",
                                                                        "NOT GIVEN",
                                                                    ],
                                                                    "name" => "jawaban_reading[28]",
                                                                    "jawaban" => $listening_reading[68][1],
                                                                    "status" => $listening_reading[68][2],
                                                                ],
                                                                [ 
                                                                    "no" => 30, 
                                                                    "soal" => "A species is said to be extinct when only one individual exists.",
                                                                    "pilihan" => [
                                                                        "YES",
                                                                        "NO",
                                                                        "NOT GIVEN",
                                                                    ],
                                                                    "name" => "jawaban_reading[29]",
                                                                    "jawaban" => $listening_reading[69][1],
                                                                    "status" => $listening_reading[69][2],
                                                                ],
                                                                [ 
                                                                    "no" => 31, 
                                                                    "soal" => "Extinction is a naturally occurring phenomenon.",
                                                                    "pilihan" => [
                                                                        "YES",
                                                                        "NO",
                                                                        "NOT GIVEN",
                                                                    ],
                                                                    "name" => "jawaban_reading[30]",
                                                                    "jawaban" => $listening_reading[70][1],
                                                                    "status" => $listening_reading[70][2],
                                                                ],
                                                            ];
                                                        ?>

                                                        <?php foreach ($data_soal_28_31 as $data_soal) :?>
                                                            <?= soal_pg_ielts($data_soal)?>
                                                        <?php endforeach;?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="shadow card mb-3">
                                    <?php
                                        $text = "
                                            <p><center><h3>Population Viability Analysis</h3></center></p>
                                            <span><b>Part A</b></span>
                                            <p class='reading-48'>To make political decisions about the extent and type of forestry in a region it is important to understand the consequences of those decisions. One tool for assessing the impact of forestry on the ecosystem is population viability analysis (PVA). This is a tool for predicting the probability that a species will become extinct in a particular region over a specific period. It has been successfully used in the United States to provide input into resource exploitation decisions and assist wildlife managers and there is now enormous potential for using population viability to assist wildlife management in Australia’s forests.</p>
                                            <p class='reading-49'>A species becomes extinct when the last individual dies. This observation is a useful starting point for any discussion of extinction as it highlights the role of luck and chance in the extinction process. To make a prediction about extinction we need to understand the processes that can contribute to it and these fall into four broad categories which are discussed below.</p>
                                            <span><b>Part B</b></span><br>
                                            <b>A</b>
                                            <p class='reading-50'>Early attempts to predict population viability were based on demographic uncertainty Whether an individual survives from one year to the next will largely be a matter of chance. Some pairs may produce several young in a single year while others may produce none in that same year. Small populations will fluctuate enormously because of the random nature of birth and death and these chance fluctuations can cause species extinctions even if, on average, the population size should increase. Taking only this uncertainty of ability to reproduce into account, extinction is unlikely if the number of individuals in a population is above about 50 and the population is growing.</p>
                                            <b>B</b>
                                            <p class='reading-51'>Small populations cannot avoid a certain amount of inbreeding. This is particularly true if there is a very small number of one sex. For example, if there are only 20 individuals of a species and only one is a male, all future individuals in the species must be descended from that one male. For most animal species such individuals are less likely to survive and reproduce. Inbreeding increases the chance of extinction.</p>
                                            <b>C</b>
                                            <p class='reading-52'>Variation within a species is the raw material upon which natural selection acts. Without genetic variability a species lacks the capacity to evolve and cannot adapt to changes in its environment or to new predators and new diseases. The loss of genetic diversity associated with reductions in population size will contribute to the likelihood of extinction.</p>
                                            <b>D</b>
                                            <p class='reading-53'>Recent research has shown that other factors need to be considered. Australia’s environment fluctuates enormously from year to year. These fluctuations add yet another degree of uncertainty to the survival of many species. Catastrophes such as fire, flood, drought or epidemic may reduce population sizes to a small fraction of their average level. When allowance is made for these two additional elements of uncertainty the population size necessary to be confident of persistence for a few hundred years may increase to several thousand.</p>
                                            <span><b>Part C</b></span><br>
                                            <p class='reading-54'>Beside these processes we need to bear in mind the distribution of a population. A species that occurs in five isolated places each containing 20 individuals will not have the same probability of extinction as a species with a single population of 100 individuals in a single locality.</p>
                                            <p class='reading-55'>Where logging occurs (that is, the cutting down of forests for timber) forest- dependent creatures in that area will be forced to leave. Ground-dwelling herbivores may return within a decade. However, arboreal marsupials (that is animals which live in trees) may not recover to pre-logging densities for over a century. As more forests are logged, animal population sizes will be reduced further. Regardless of the theory or model that we choose, a reduction in population size decreases the genetic diversity of a population and increases the probability of extinction because of any or all of the processes listed above. It is therefore a scientific fact that increasing the area that is loaded in any region will increase the probability that forest-dependent animals will become extinct.</p>
                                        ";
                                    ?>
                                    <div class="card-body ps-4">
                                        <p class="question">
                                            SECTION THREE | QUESTIONS 28-40<br>
                                            PASSAGE THREE (Questions 28-40)<br>
                                            You should spend about 20 minutes on Questions 28-40 which are based on Reading Passage Three below).
                                        </p>

                                        <div class="row">
                                            <div class="col-7">
                                                <div class="card">
                                                    <div class="card-body ps-4" style="height: 600px; overflow: scroll">
                                                        <?= $text?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="card">
                                                    <div class="card-body ps-4" style="height: 600px; overflow: scroll">
                                                        <p class="question">
                                                            Questions 32-35<br>
                                                            These questions are based on Part B of Reading Passage Three.<br>
                                                            In paragraphs A to D the author describes four processes which may contribute to the extinction of a species.<br>
                                                            Match the list of processes (i-vi) to the paragraphs.<br>
                                                            Write the appropriate number (i-vi) in boxes 32-35 on your answer sheet.<br>
                                                            NB There are more processes than paragraphs so you will not use all of them.
                                                        </p>

                                                        <table class="table">
                                                            <tr>
                                                                <td colspan="2"><center>Processes</center></td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>i</b></td>
                                                                <td>Loss of ability to adapt</td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>ii</b></td>
                                                                <td>Natural disasters</td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>iii</b></td>
                                                                <td>An imblance of the sexes</td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>iv</b></td>
                                                                <td>Human disasters</td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>v</b></td>
                                                                <td>Evolution</td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>vi</b></td>
                                                                <td>The haphazard nature of reproduction</td>
                                                            </tr>
                                                        </table>

                                                        <p><b>32.</b> Paragraph A <?= soal_isian_ielts("jawaban_reading[31]", $listening_reading[71][1], $listening_reading[71][2])?></p>
                                                        <p><b>33.</b> Paragraph B <?= soal_isian_ielts("jawaban_reading[32]", $listening_reading[72][1], $listening_reading[72][2])?></p>
                                                        <p><b>34.</b> Paragraph C <?= soal_isian_ielts("jawaban_reading[33]", $listening_reading[73][1], $listening_reading[73][2])?></p>
                                                        <p><b>35.</b> Paragraph D <?= soal_isian_ielts("jawaban_reading[34]", $listening_reading[74][1], $listening_reading[74][2])?></p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="shadow card mb-3">
                                    <?php
                                        $text = "
                                            <p><center><h3>Population Viability Analysis</h3></center></p>
                                            <span><b>Part A</b></span>
                                            <p class='reading-56'>To make political decisions about the extent and type of forestry in a region it is important to understand the consequences of those decisions. One tool for assessing the impact of forestry on the ecosystem is population viability analysis (PVA). This is a tool for predicting the probability that a species will become extinct in a particular region over a specific period. It has been successfully used in the United States to provide input into resource exploitation decisions and assist wildlife managers and there is now enormous potential for using population viability to assist wildlife management in Australia’s forests.</p>
                                            <p class='reading-57'>A species becomes extinct when the last individual dies. This observation is a useful starting point for any discussion of extinction as it highlights the role of luck and chance in the extinction process. To make a prediction about extinction we need to understand the processes that can contribute to it and these fall into four broad categories which are discussed below.</p>
                                            <span><b>Part B</b></span><br>
                                            <b>A</b>
                                            <p class='reading-58'>Early attempts to predict population viability were based on demographic uncertainty Whether an individual survives from one year to the next will largely be a matter of chance. Some pairs may produce several young in a single year while others may produce none in that same year. Small populations will fluctuate enormously because of the random nature of birth and death and these chance fluctuations can cause species extinctions even if, on average, the population size should increase. Taking only this uncertainty of ability to reproduce into account, extinction is unlikely if the number of individuals in a population is above about 50 and the population is growing.</p>
                                            <b>B</b>
                                            <p class='reading-59'>Small populations cannot avoid a certain amount of inbreeding. This is particularly true if there is a very small number of one sex. For example, if there are only 20 individuals of a species and only one is a male, all future individuals in the species must be descended from that one male. For most animal species such individuals are less likely to survive and reproduce. Inbreeding increases the chance of extinction.</p>
                                            <b>C</b>
                                            <p class='reading-60'>Variation within a species is the raw material upon which natural selection acts. Without genetic variability a species lacks the capacity to evolve and cannot adapt to changes in its environment or to new predators and new diseases. The loss of genetic diversity associated with reductions in population size will contribute to the likelihood of extinction.</p>
                                            <b>D</b>
                                            <p class='reading-61'>Recent research has shown that other factors need to be considered. Australia’s environment fluctuates enormously from year to year. These fluctuations add yet another degree of uncertainty to the survival of many species. Catastrophes such as fire, flood, drought or epidemic may reduce population sizes to a small fraction of their average level. When allowance is made for these two additional elements of uncertainty the population size necessary to be confident of persistence for a few hundred years may increase to several thousand.</p>
                                            <span><b>Part C</b></span><br>
                                            <p class='reading-62'>Beside these processes we need to bear in mind the distribution of a population. A species that occurs in five isolated places each containing 20 individuals will not have the same probability of extinction as a species with a single population of 100 individuals in a single locality.</p>
                                            <p class='reading-63'>Where logging occurs (that is, the cutting down of forests for timber) forest- dependent creatures in that area will be forced to leave. Ground-dwelling herbivores may return within a decade. However, arboreal marsupials (that is animals which live in trees) may not recover to pre-logging densities for over a century. As more forests are logged, animal population sizes will be reduced further. Regardless of the theory or model that we choose, a reduction in population size decreases the genetic diversity of a population and increases the probability of extinction because of any or all of the processes listed above. It is therefore a scientific fact that increasing the area that is loaded in any region will increase the probability that forest-dependent animals will become extinct.</p>
                                        ";
                                    ?>
                                    <div class="card-body ps-4">
                                        <p class="question">
                                            SECTION THREE | QUESTIONS 28-40<br>
                                            PASSAGE THREE (Questions 28-40)<br>
                                            You should spend about 20 minutes on Questions 28-40 which are based on Reading Passage Three below).
                                        </p>

                                        <div class="row">
                                            <div class="col-7">
                                                <div class="card">
                                                    <div class="card-body ps-4" style="height: 600px; overflow: scroll">
                                                        <?= $text?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="card">
                                                    <div class="card-body ps-4" style="height: 600px; overflow: scroll">
                                                        <p class="question">
                                                            Questions 36-38<br>
                                                            Based on your reading of Part C, complete the sentences below with words taken from the passage three.<br>
                                                            Use NO MORE THAN THREE WORDS for boxes 9-11 on your answer sheet.
                                                        </p>
                                                        <p><b>36.</b> While the population of a species may be on the increase, there is always a chance that small isolated groups <?= soal_isian_ielts("jawaban_reading[35]", $listening_reading[75][1], $listening_reading[75][2])?></p>
                                                        <p><b>37.</b> Survival of a species depends on a balance between the size of a population and its <?= soal_isian_ielts("jawaban_reading[36]", $listening_reading[76][1], $listening_reading[76][2])?></p>
                                                        <p><b>38.</b> The likelihood that animals which live in forests will become extinct is increased when <?= soal_isian_ielts("jawaban_reading[37]", $listening_reading[77][1], $listening_reading[77][2])?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="shadow card mb-3">
                                    <?php
                                        $text = "
                                            <p><center><h3>Population Viability Analysis</h3></center></p>
                                            <span><b>Part A</b></span>
                                            <p class='reading-64'>To make political decisions about the extent and type of forestry in a region it is important to understand the consequences of those decisions. One tool for assessing the impact of forestry on the ecosystem is population viability analysis (PVA). This is a tool for predicting the probability that a species will become extinct in a particular region over a specific period. It has been successfully used in the United States to provide input into resource exploitation decisions and assist wildlife managers and there is now enormous potential for using population viability to assist wildlife management in Australia’s forests.</p>
                                            <p class='reading-65'>A species becomes extinct when the last individual dies. This observation is a useful starting point for any discussion of extinction as it highlights the role of luck and chance in the extinction process. To make a prediction about extinction we need to understand the processes that can contribute to it and these fall into four broad categories which are discussed below.</p>
                                            <span><b>Part B</b></span><br>
                                            <b>A</b>
                                            <p class='reading-66'>Early attempts to predict population viability were based on demographic uncertainty Whether an individual survives from one year to the next will largely be a matter of chance. Some pairs may produce several young in a single year while others may produce none in that same year. Small populations will fluctuate enormously because of the random nature of birth and death and these chance fluctuations can cause species extinctions even if, on average, the population size should increase. Taking only this uncertainty of ability to reproduce into account, extinction is unlikely if the number of individuals in a population is above about 50 and the population is growing.</p>
                                            <b>B</b>
                                            <p class='reading-67'>Small populations cannot avoid a certain amount of inbreeding. This is particularly true if there is a very small number of one sex. For example, if there are only 20 individuals of a species and only one is a male, all future individuals in the species must be descended from that one male. For most animal species such individuals are less likely to survive and reproduce. Inbreeding increases the chance of extinction.</p>
                                            <b>C</b>
                                            <p class='reading-68'>Variation within a species is the raw material upon which natural selection acts. Without genetic variability a species lacks the capacity to evolve and cannot adapt to changes in its environment or to new predators and new diseases. The loss of genetic diversity associated with reductions in population size will contribute to the likelihood of extinction.</p>
                                            <b>D</b>
                                            <p class='reading-69'>Recent research has shown that other factors need to be considered. Australia’s environment fluctuates enormously from year to year. These fluctuations add yet another degree of uncertainty to the survival of many species. Catastrophes such as fire, flood, drought or epidemic may reduce population sizes to a small fraction of their average level. When allowance is made for these two additional elements of uncertainty the population size necessary to be confident of persistence for a few hundred years may increase to several thousand.</p>
                                            <span><b>Part C</b></span><br>
                                            <p class='reading-70'>Beside these processes we need to bear in mind the distribution of a population. A species that occurs in five isolated places each containing 20 individuals will not have the same probability of extinction as a species with a single population of 100 individuals in a single locality.</p>
                                            <p class='reading-71'>Where logging occurs (that is, the cutting down of forests for timber) forest- dependent creatures in that area will be forced to leave. Ground-dwelling herbivores may return within a decade. However, arboreal marsupials (that is animals which live in trees) may not recover to pre-logging densities for over a century. As more forests are logged, animal population sizes will be reduced further. Regardless of the theory or model that we choose, a reduction in population size decreases the genetic diversity of a population and increases the probability of extinction because of any or all of the processes listed above. It is therefore a scientific fact that increasing the area that is loaded in any region will increase the probability that forest-dependent animals will become extinct.</p>
                                        ";
                                    ?>
                                    <div class="card-body ps-4">
                                        <p class="question">
                                            SECTION THREE | QUESTIONS 28-40<br>
                                            PASSAGE THREE (Questions 28-40)<br>
                                            You should spend about 20 minutes on Questions 28-40 which are based on Reading Passage Three below).
                                        </p>

                                        <div class="row">
                                            <div class="col-7">
                                                <div class="card">
                                                    <div class="card-body ps-4" style="height: 600px; overflow: scroll">
                                                        <?= $text?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="card">
                                                    <div class="card-body ps-4" style="height: 600px; overflow: scroll">
                                                        <p class="question">
                                                            Questions 39<br>
                                                            Choose the appropriate letter A-D and write it in box 39 on your answer sheet.
                                                        </p>
                                                        
                                                        <?php
                                                            $data_soal_39 = [
                                                                [ 
                                                                    "no" => 39, 
                                                                    "soal" => "An alternative heading for the passage could be:",
                                                                    "pilihan" => [
                                                                        "<b>A.</b> The protection of native flora and fauna",
                                                                        "<b>B.</b> Influential factors in assessing survival probability",
                                                                        "<b>C.</b> An economic rationale for the logging of forests",
                                                                        "<b>D.</b> Preventive measures for the extinction of a species",
                                                                    ],
                                                                    "name" => "jawaban_reading[38]",
                                                                    "jawaban" => $listening_reading[78][1],
                                                                    "status" => $listening_reading[78][2],
                                                                ],
                                                            ];
                                                        ?>

                                                        <?php foreach ($data_soal_39 as $data_soal) :?>
                                                            <?= soal_pg_ielts($data_soal)?>
                                                        <?php endforeach;?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sesi-writing" style="display:nones">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <img src="<?= base_url()?>assets/img/writing-academic-post-test-001.png" alt="">

                                        <span>Type your answer here</span>
                                        <textarea id="textarea-1" class="form-control mb-3" name="text_writing[0]" data-bs-toggle="autosize" placeholder="" style="overflow: hidden scroll; overflow-wrap: break-word; resize: none; height: 56px;"><?= $writing[0]?></textarea>
                                        <?php
                                            if($writing[0] != ""){
                                                $text = $writing[0];
                                                $text = explode(" ", $text);
                                            } else {
                                                $text = [];
                                            }
                                        ?>
                                        <p><?= count($text)?> words</p>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-body">
                                        <p class="question mb-3">
                                            IELTS WRITING TASK TWO<br>
                                            You should spend about 40 minutes on this task<br>
                                        </p>
                                        
                                        <p>Write about the following topic:</p>
                                        <table class="table">
                                            <tr>
                                                <td>
                                                    <i>
                                                        Being a celebrity-such as a famous film star or sports personality-brings problems as well as benefits. <br>
                                                        Do you think that being a celebrity brings more benefits or more problems?
                                                    </i>
                                                </td>
                                            </tr>
                                        </table>

                                        <p>
                                            Give reasons for your answer and include any relevant examples from your own knowledge or experience<br>
                                            Write at least 250 words.
                                        </p>
                                        
                                        <span>Type your answer here</span>
                                        <textarea id="textarea-2" class="form-control mb-3" name="text_writing[1]" data-bs-toggle="autosize" placeholder="" style="overflow: hidden scroll; overflow-wrap: break-word; resize: none; height: 56px;"><?= $writing[1]?></textarea>
                                        <?php
                                            if($writing[1] != ""){
                                                $text = $writing[1];
                                                $text = explode(" ", $text);
                                            } else {
                                                $text = [];
                                            }
                                        ?>
                                        <p><?= count($text)?> words</p>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <!-- <a href="javascript:void(0)" class="btn btn-primary btnSimpan">Save</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $this->load->view("_partials/footer-bar")?>
                </div>
            </div>
        </div>
    </form>

    <?php  
        if(isset($js)) :
            foreach ($js as $i => $js) :?>
                <script src="<?= base_url()?>assets/myjs/<?= $js?>"></script>
                <?php 
            endforeach;
        endif;    
    ?>

<?php $this->load->view("_partials/footer")?>

<script>

    $("#textarea-1").on('keyup', function(e) {
        var words = $.trim(this.value).length ? this.value.match(/\S+/g).length : 0;
        // if (words <= 150) {
            $('#count-textarea-1').text(words);
        //     $('#count-left-1').text(150-words)
        // }else{
        //     // Split the string on first 200 words and rejoin on spaces
        //     var trimmed = $(this).val().split(/\s+/, 150).join(" ");
        //     // Add a space at the end to keep new typing making new words
        //     $(this).val(trimmed + " ");
        // }
    });

    $("#textarea-2").on('keyup', function(e) {
        var words = $.trim(this.value).length ? this.value.match(/\S+/g).length : 0;
        // if (words <= 250) {
            $('#count-textarea-2').text(words);
        //     $('#count-left-2').text(250-words)
        // }else{
        //     // Split the string on first 200 words and rejoin on spaces
        //     var trimmed = $(this).val().split(/\s+/, 250).join(" ");
        //     // Add a space at the end to keep new typing making new words
        //     $(this).val(trimmed + " ");
        // }
    });

    $('.form-autosize').on('input', function () {
        this.style.width = '60px';
            
        this.style.width = (parseInt((this.scrollWidth)) + parseInt(25))  + 'px';
    });

    $(".btnTransisiSatu").click(function(){
        var first_name = $("[name='first_name']").val();
        var last_name = $("[name='last_name']").val();
        var email = $("[name='email']").val();
        var id_tes = $("[name='id_tes']").val();

        if(first_name == "" || last_name == "" || email == ""){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Lengkapi data terlebih dahulu',
            })
        } else {

            // cek email 
            var email = ajax(url_base+"soal/cek_email", "POST", {id_tes: id_tes, email: email});

            if(email == 1){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Email Anda telah digunakan',
                })
            } else {
                $("#login").hide();
                $("#transisi-sesi-1").show();

                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $("#elementtoScrollToID").offset().top
                    }, 1000);
                }
            }
        }

    })

    $(".btnTransisiDua").click(function(){
        Swal.fire({
            icon: 'question',
            html: 'Once you close, you cannot open the previous section',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No'
        }).then(function (result) {
            if (result.value) {
                clearInterval(countDown);

                $("#soal_tes").hide();
                $("#transisi-sesi-2").show();

                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $("#elementtoScrollToID").offset().top
                    }, 1000);
                }

                var audios = document.getElementsByTagName('audio');  
                for(var i = 0, len = audios.length; i < len;i++){  
                    if(audios[i]){  
                        audios[i].pause();  
                    }  
                }
            }
        })
    })

    $(".btnTransisiTiga").click(function(){
        Swal.fire({
            icon: 'question',
            html: 'Once you close, you cannot open the previous section',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No'
        }).then(function (result) {
            if (result.value) {
                clearInterval(countDown);

                $("#soal_tes").hide();
                $("#transisi-sesi-3").show();

                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $("#elementtoScrollToID").offset().top
                    }, 1000);
                }
            }
        })
    })

    $(".btnListening").click(function(){
        Swal.fire({
            icon: 'question',
            html: 'Start the session now?',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No'
        }).then(function (result) {
            if (result.value) {
                $("#transisi-sesi-1").hide();
                $("#soal_tes").show();
                $(".sesi-listening").show();
        
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $("#elementtoScrollToID").offset().top
                    }, 1000);
                }
        
                // clearInterval(countDown);
                
                sec = 40 * 60;
                // sec = 30;
        
                countDiv = document.getElementById("waktu"),
                secpass,
                countDown = setInterval(function () {
                    'use strict';
                    secpass("sesi-listening");
                }, 1000);
            }
        })
    })

    $(".btnReading").click(function(){
        Swal.fire({
            icon: 'question',
            html: 'Start the session now?',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No'
        }).then(function (result) {
            if (result.value) {
                $("#transisi-sesi-2").hide();
                $("#soal_tes").show();
                $(".sesi-listening").hide();
                $(".sesi-reading").show();
        
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $("#elementtoScrollToID").offset().top
                    }, 1000);
                }
        
                clearInterval(countDown);

                sec = 60 * 60;
                // sec = 40;
        
                countDiv = document.getElementById("waktu"),
                secpass,
                countDown = setInterval(function () {
                    'use strict';
                    secpass("sesi-reading");
                }, 1000);
            }
        })
    })

    $(".btnWriting").click(function(){
        Swal.fire({
            icon: 'question',
            html: 'Start the session now?',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No'
        }).then(function (result) {
            if (result.value) {
                $("#transisi-sesi-3").hide();
                $("#soal_tes").show();
                $(".sesi-listening").hide();
                $(".sesi-reading").hide();
                $(".sesi-writing").show();
        
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $("#elementtoScrollToID").offset().top
                    }, 1000);
                }
        
                clearInterval(countDown);

                sec = 60 * 60;
                // sec = 40;
        
                countDiv = document.getElementById("waktu"),
                secpass,
                countDown = setInterval(function () {
                    'use strict';
                    secpass("sesi-writing");
                }, 1000);
            }
        })
    })

    $(".btnSimpan").click(function(){
        Swal.fire({
            icon: 'question',
            html: 'Finish the test?',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No'
        }).then(function (result) {
            if (result.value) {
                swal.fire({
                    html: '<h4>Submit your answer ...</h4>',
                    allowOutsideClick: false,
                    showConfirmButton: false,
                    onBeforeOpen: () => {
                        Swal.showLoading()
                    },
                });

                $(".btnSimpan").html("Saving...");
                $(".btnSimpan").prop("disabled", true);
                $("#formIelts").submit()
            }
        })
    })

    $('input:radio').click(function () {
        let id = $(this).data("id");
        let value = $(this).val();

        $(`[name="`+id+`"]`).val(value);
    });

    function secpass(id) {
        'use strict';
        var min = Math.floor(sec / 60),
        remSec  = sec % 60;
        if (remSec < 10) {
            remSec = '0' + remSec;
        }
        if (min < 10) {
            min = '0' + min;
        }

        countDiv.innerHTML = min + ":" + remSec;
        if (sec > 0) {
            sec = sec - 1;
        } else {
            if(id == 'sesi-listening'){
                clearInterval(countDown);
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Time out',
                    allowOutsideClick: false,
                }).then(function (result) {
                    
                    $("#soal_tes").hide();
                    $("#transisi-sesi-2").show();

                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        $([document.documentElement, document.body]).animate({
                            scrollTop: $("#elementtoScrollToID").offset().top
                        }, 1000);
                    }
                    
                })
            } else if(id == 'sesi-reading'){
                clearInterval(countDown);
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Time out',
                    allowOutsideClick: false,
                }).then(function (result) {
                    
                    $("#soal_tes").hide();
                    $("#transisi-sesi-3").show();

                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        $([document.documentElement, document.body]).animate({
                            scrollTop: $("#elementtoScrollToID").offset().top
                        }, 1000);
                    }
                    
                })
            } else if(id == 'sesi-writing'){
                clearInterval(countDown);

                // scroll to top 
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $("#elementtoScrollToID").offset().top
                    }, 1000);
                }

                swal.fire({
                    title: 'Time out',
                    html: '<h4>Submit your answer ...</h4>',
                    allowOutsideClick: false,
                    showConfirmButton: false,
                    onBeforeOpen: () => {
                        Swal.showLoading()
                    },
                });

                $(".btnSimpan").html("Saving...");
                $(".btnSimpan").prop("disabled", true);
                $(".btnBack").prop("disabled", true);
                $("#formIelts").submit()
            }
        }
    }

    for (let i = 1; i < 150; i++) {
        // var words = $( ".reading-"+i).first().text().split( /\s+/ );
        var words = $( ".reading-"+i).first().text().split(" ");
        var text = words.join( "</span> <span>" );

        text = text.replace("()", "<i>");
        text = text.replace("(*)", "</i>");

        text = text.replace("((b))", "<b>");
        text = text.replace("((/b))", "</b>");
        
        text = text.replace("((u))", "<u>");
        text = text.replace("((/u))", "</u>");

        $( ".reading-"+i ).first().html( "<span>" + text + "</span>" );
    }

    $( "span" ).on( "click", function() {
        $( this ).toggleClass( "highlight" );
        return false;
    });

    // audio
        $('.audio').on('timeupdate', function() {
            let id = $(this).data("id");
            $('#seekbar-'+id).attr("value", this.currentTime / this.duration);
        });

        $(".btnAudio").click(function(){
            id = $(this).data("id");
            $("#audio-"+id)[0].play();
            $(this).hide();
        })

        document.addEventListener('play', function(e){  
            var audios = document.getElementsByTagName('audio');  
            for(var i = 0, len = audios.length; i < len;i++){  
                if(audios[i] != e.target){  
                    audios[i].pause();  
                }  
            }  
        }, true);
    // audio 

    $("textarea").keydown(function(e) {
        if(e.keyCode === 9) { // tab was pressed
            // get caret position/selection
            var start = this.selectionStart;
                end = this.selectionEnd;

            var $this = $(this);

            // set textarea value to: text before caret + tab + text after caret
            $this.val($this.val().substring(0, start)
                        + "\t"
                        + $this.val().substring(end));

            // put caret at right position again
            this.selectionStart = this.selectionEnd = start + 1;

            // prevent the focus lose
            return false;
        }
    });

</script>