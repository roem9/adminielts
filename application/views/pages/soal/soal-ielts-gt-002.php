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
        <div id="soal_tes" style="display: nones">
            <div class="wrapper" id="elementtoScrollToID">
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

                                <div class="shadow card mb-3 soal">
                                    <div class="card-body ps-4">
                                        <center><b>IELTS LISTENING</b></center>
                                        <p class="question">SECTION 1</p>
                                        <p class="question">
                                                Questions 1-5 <br>
                                                Complete the notes below <br>
                                                Write NO MORE THAN THREE WORDS for each answer.<br>
                                        </p>
                                        <table>
        
                                        </table>
                                        <center>
                                            <table class="table" style="width:500px">
                                                <tr>
                                                    <td><center>Transport from Airport to Milton</center></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Example : Answer<br>
                                                        Distance : 147 miles
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Options : </p>
                                                        <p>&#8226; Car hire</p>
                                                        <p>&emsp;&emsp; Don’t want to drive</p>
                                                        <p>&#8226; <b>1)</b><?= soal_isian_ielts("jawaban_listening[0]", $listening_reading[0][1], $listening_reading[0][2])?></p>
                                                        <p>&emsp;&emsp; - expensive</p>
                                                        <p>&#8226; Grey hound bus</p>
                                                        <p>&emsp;&emsp; - $15 single $27,50 return</p>
                                                        <p>&emsp;&emsp; - Direct to the <b>2)</b><?= soal_isian_ielts("jawaban_listening[1]", $listening_reading[1][1], $listening_reading[1][2])?></p>
                                                        <p>&emsp;&emsp; - Long <b>3)</b><?= soal_isian_ielts("jawaban_listening[2]", $listening_reading[2][1], $listening_reading[2][2])?></p>
                                                        <p>&#8226; Airport Shuttle</p>
                                                        <p>&emsp;&emsp; - <b>4)</b><?= soal_isian_ielts("jawaban_listening[3]", $listening_reading[3][1], $listening_reading[3][2])?> service</p>
                                                        <p>&emsp;&emsp; - Every 2 hours</p>
                                                        <p>&emsp;&emsp; - $35 single $65 return</p>
                                                        <p>&emsp;&emsp; - Need to <b>5)</b><?= soal_isian_ielts("jawaban_listening[4]", $listening_reading[4][1], $listening_reading[4][2])?> service</p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </center>
                                    </div>
                                </div>
        
                                <div class="shadow card mb-3">
                                    <div class="card-body ps-4">
                                        <p class="question">
                                            Questions 6-10<br>
                                            Complete the booking from below:<br>
                                            Write ONE WORD AND/OR A NUMBER for each answer:<br>
                                        </p>
                                        <center>
                                            <table class="table" style="width:700px">
                                                <tr>
                                                    <td>
                                                        <p><center><b>AIRPORT SHUTTLE BOOKING FORM</b></center></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p><b>TO : </b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Milton </p>
                                                        <p><b>Date : </b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b>6)</b><?= soal_isian_ielts("jawaban_listening[5]", $listening_reading[5][1], $listening_reading[5][2])?> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;<b>No. of passenger</b> : One</p>
                                                        <p><b>Bus Time :</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b>7)</b><?= soal_isian_ielts("jawaban_listening[6]", $listening_reading[6][1], $listening_reading[6][2])?> pm&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b>Type of ticket</b> : Single</p>
                                                        <p><b>Name :</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &nbsp;<b>Janet 8)</b><?= soal_isian_ielts("jawaban_listening[7]", $listening_reading[7][1], $listening_reading[7][2])?></p>
                                                        <p><b>Flight No :</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b>9)</b><?= soal_isian_ielts("jawaban_listening[8]", $listening_reading[8][1], $listening_reading[8][2])?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b>From</b> : London Heathrow</p>
                                                        <p><b>Address in Milton :</b>&emsp;&emsp;Vacation Motel, 24, Kitchener Street</p>
                                                        <p><b>Fare :</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;$35</p>
                                                        <p><b>Credit Card No :</b>&emsp;&emsp;&emsp;(Visa) <b>10)</b><?= soal_isian_ielts("jawaban_listening[9]", $listening_reading[9][1], $listening_reading[9][2])?></p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </center>
                                    </div>
                                </div>
        
                                <div class="shadow card mb-3">
                                    <div class="card-body ps-4">
                                        <p class="question">SECTION 2 Question 11-20</p>
                                        <p class="question">
                                            Questions 11 – 16<br>
                                            Choose the correct letter A, B, or C
                                        </p>
                                        <?php
                                            $data_soal_11_16  = [
                                                [
                                                    "no" => 11,
                                                    "soal" => "PS Camping has been organizing holidays for",
                                                    "pilihan" => [
                                                        "<b>A.</b> 15 years.",
                                                        "<b>B.</b> 20 years.",
                                                        "<b>C.</b> 25 years."
                                                    ],
                                                    "name" => "jawaban_listening[10]",
                                                    "jawaban" => $listening_reading[10][1],
                                                    "status" => $listening_reading[10][2],
                                                ],
                                                [
                                                    "no" => 12,
                                                    "soal" => "The company has most camping sites in",
                                                    "pilihan" => [
                                                        "<b>A.</b> France.",
                                                        "<b>B.</b> Italy.",
                                                        "<b>C.</b> Switzerland."
                                                    ],
                                                    "name" => "jawaban_listening[11]",
                                                    "jawaban" => $listening_reading[11][1],
                                                    "status" => $listening_reading[11][2],
                                                ],
                                                [
                                                    "no" => 13,
                                                    "soal" => "Which organized activity can children do every day of the week?",
                                                    "pilihan" => [
                                                        "<b>A.</b> football",
                                                        "<b>B.</b> drama",
                                                        "<b>C.</b> model making"
                                                    ],
                                                    "name" => "jawaban_listening[12]",
                                                    "jawaban" => $listening_reading[12][1],
                                                    "status" => $listening_reading[12][2],
                                                ],
                                                [
                                                    "no" => 14,
                                                    "soal" => "Some areas of the sites have a ‘no noise’ rule after",
                                                    "pilihan" => [
                                                        "<b>A.</b> 9.30 p.m.",
                                                        "<b>B.</b> 10.00 p.m.",
                                                        "<b>C.</b> 10.30 p.m."
                                                    ],
                                                    "name" => "jawaban_listening[13]",
                                                    "jawaban" => $listening_reading[13][1],
                                                    "status" => $listening_reading[13][2],
                                                ],
                                                [
                                                    "no" => 15,
                                                    "soal" => "The holiday insurance that is offered by PS Camping",
                                                    "pilihan" => [
                                                        "<b>A.</b> can be charged on an annual basis.",
                                                        "<b>B.</b> is included in the price of the holiday.",
                                                        "<b>C.</b> must be taken out at the time of booking."
                                                    ],
                                                    "name" => "jawaban_listening[14]",
                                                    "jawaban" => $listening_reading[14][1],
                                                    "status" => $listening_reading[14][2],
                                                ],
                                                [
                                                    "no" => 16,
                                                    "soal" => "Customers who recommend PS Camping to friends will receive",
                                                    "pilihan" => [
                                                        "<b>A.</b> a free gift.",
                                                        "<b>B.</b> an upgrade to a luxury tent.",
                                                        "<b>C.</b> a discount."
                                                    ],
                                                    "name" => "jawaban_listening[15]",
                                                    "jawaban" => $listening_reading[15][1],
                                                    "status" => $listening_reading[15][2],
                                                ],
                                            ];
                                        ?>
                                        <?php foreach ($data_soal_11_16 as $data_soal) :?>
                                            <?= soal_pg_ielts($data_soal)?>
                                        <?php endforeach;?>
                                    </div>
                                </div>
        
                                <div class="shadow card mb-3">
                                    <div class="card-body ps-4">
                                        <p class="question">
                                            Questions 17 – 20 <br>
                                            What does the speaker say about the following items? <br>
                                            Write the correct letter: A, B or C next to question 17 – 20 <br>
                                        </p>
                                        
                                        <center>
                                            <table class="table" style="width: 400px">
                                                <tr>
                                                    <td>
                                                        <p><b>A</b> They are provided in all tents.</p>
                                                        <p><b>B</b> They are found in central areas of the campsite.</p>
                                                        <p><b>C</b> They are available on request.</p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </center>

                                        <p><b>17)</b> Barbecues <?= soal_isian_ielts("jawaban_listening[16]", $listening_reading[16][1], $listening_reading[16][2])?></p>
                                        <p><b>18)</b> Toys <?= soal_isian_ielts("jawaban_listening[17]", $listening_reading[17][1], $listening_reading[17][2])?></p>
                                        <p><b>19)</b> Cool boxes <?= soal_isian_ielts("jawaban_listening[18]", $listening_reading[18][1], $listening_reading[18][2])?></p>
                                        <p><b>20)</b> Mops and buckets <?= soal_isian_ielts("jawaban_listening[19]", $listening_reading[19][1], $listening_reading[19][2])?></p>
                                    </div>
                                </div>
        
                                <div class="shadow card mb-3">
                                    <div class="card-body ps-4">
                                        <p class="question">
                                            SECTION 3 Questions 21 – 30
                                        </p>
                                        <p class="question">
                                            Questions 21 -23<br>
                                            Complete the notes below<br>
                                            Write ONE WORD ONLY for each answer:<br>
                                        </p>
                                        
                                        <center>
                                            <table class="table" style="width: 500px">
                                                <tr>
                                                    <td>
                                                        <center>DIFFERENCES BETWEEN INDIVIDUALS IN THE WORKPLACE</center>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Individuals bring different:</p>
                                                        <p>&emsp; &#8226; Ideas</p>
                                                        <p>&emsp; &#8226; <b>21)</b><?= soal_isian_ielts("jawaban_listening[20]", $listening_reading[20][1], $listening_reading[20][2])?></p>
                                                        <p>&emsp; &#8226; Learning experiences</p>
                                                        <p>Work behavior difference are due to:</p>
                                                        <p>&emsp; &#8226; Personality</p>
                                                        <p>&emsp; &#8226; <b>22)</b><?= soal_isian_ielts("jawaban_listening[21]", $listening_reading[21][1], $listening_reading[21][2])?></p>
                                                        <p>Effects of diversity on companies</p>
                                                        <p>&emsp; <i>Advantage</i> : diversity develops <b>23)</b><?= soal_isian_ielts("jawaban_listening[22]", $listening_reading[22][1], $listening_reading[22][2])?></p>
                                                        <p>&emsp; <i>Disadvantage</i> : diversity can cause conflict</p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </center>
                                    </div>
                                </div>
        
                                <div class="shadow card mb-3">
                                    <div class="card-body ps-4">
                                        <p class="question">
                                            Question 24 -27<br>
                                            Choose the correct letter A, B or C
                                        </p>
                                        <?php
                                            $data_soal_24_27 = [
                                                [ 
                                                    "no" => 24, 
                                                    "soal" => "Janice thinks that employers should encourage workers who are",
                                                    "pilihan" => [
                                                        "<b>A.</b> potential leaders.",
                                                        "<b>B.</b> open to new ideas.",
                                                        "<b>C.</b> good at teamwork."
                                                    ],
                                                    "name" => "soal_listening[23]",
                                                    "jawaban" => $listening_reading[23][1],
                                                    "status" => $listening_reading[23][2],
                                                ],
                                                [ 
                                                    "no" => 25, 
                                                    "soal" => "Janice suggests that managers may find it difficult to",
                                                    "pilihan" => [
                                                        "<b>A.</b> form successful groups.",
                                                        "<b>B.</b> balance conflicting needs.",
                                                        "<b>C.</b> deal with uncooperative workers."
                                                    ],
                                                    "name" => "soal_listening[24]",
                                                    "jawaban" => $listening_reading[24][1],
                                                    "status" => $listening_reading[24][2],
                                                ],
                                                [ 
                                                    "no" => 26, 
                                                    "soal" => "Janice believes employers should look for job applicants who",
                                                    "pilihan" => [
                                                        "<b>A.</b> can think independently.",
                                                        "<b>B.</b> will obey the system.",
                                                        "<b>C.</b> can solve problems."
                                                    ],
                                                    "name" => "soal_listening[25]",
                                                    "jawaban" => $listening_reading[25][1],
                                                    "status" => $listening_reading[25][2],
                                                ],
                                                [ 
                                                    "no" => 27, 
                                                    "soal" => "Janice believes managers should",
                                                    "pilihan" => [
                                                        "<b>A.</b> demonstrate good behaviour.",
                                                        "<b>B.</b> encourage co-operation early on.",
                                                        "<b>C.</b> increase financial incentives."
                                                    ],
                                                    "name" => "soal_listening[26]",
                                                    "jawaban" => $listening_reading[26][1],
                                                    "status" => $listening_reading[26][2],
                                                ],
                                            ];
                                        ?>

                                        <?php foreach ($data_soal_24_27 as $data_soal) :?>
                                            <?= soal_pg_ielts($data_soal)?>
                                        <?php endforeach;?>
                                    </div>
                                </div>
        
                                <div class="shadow card mb-3">
                                    <div class="card-body ps-4">
                                        <p class="question">
                                            Question 28 – 30<br>
                                            Complete the sentences below:<br>
                                            Write ONE WORD ONLY for each answer:<br>
                                        </p>
                                        <p>28. All managers need to understand their employees and recognize their company’s <?= soal_isian_ielts("jawaban_listening[27]", $listening_reading[27][1], $listening_reading[27][2])?></p>
                                        <p>29. When managing change, increasing the company’s	may be more important than employee satisfaction. <?= soal_isian_ielts("jawaban_listening[28]", $listening_reading[28][1], $listening_reading[28][2])?></p>
                                        <p>30. During periods of change, managers may have to cope with increased amounts of <?= soal_isian_ielts("jawaban_listening[29]", $listening_reading[29][1], $listening_reading[29][2])?></p>

                                    </div>
                                </div>
        
                                <div class="shadow card mb-3">
                                    <div class="card-body ps-4">
                                        <p class="question">
                                            SECTION 4	Questions 31 – 40
                                        </p>
                                        <p class="question">
                                            Questions 31 – 35 <br>
                                            Complete the notes below: <br>
                                            Write ONE WORD ONLY for each answer:
                                        </p>

                                        <center>
                                            <table class="table" style="width: 500px">
                                                <tr>
                                                    <td>
                                                        <p>SEMINAR ON ROCK ART</p>
                                                        <p>Preparation for fieldwork trip to Namibia in <b>31)<?= soal_isian_ielts("jawaban_listening[30]", $listening_reading[30][1], $listening_reading[30][2])?></b></p>
                                                        <p>Rock art in Namibia may be</p>
                                                        <p>&emsp; &#8226;Paintings</p>
                                                        <p>&emsp; &#8226;Engravings</p>
                                                        <p>Earliest explanation of engravings of animal footprints</p>
                                                        <p>They were used to help 32) <?= soal_isian_ielts("jawaban_listening[31]", $listening_reading[31][1], $listening_reading[31][2])?>learn about tracking</p>
                                                        <p><b>But:</b></p>
                                                        <p>&emsp; &#8226; Why are the tracks usually 33)<?= soal_isian_ielts("jawaban_listening[32]", $listening_reading[32][1], $listening_reading[32][2])?>?</p>
                                                        <p>&emsp; &#8226; Why are some engravings realistic and others unrealistic?</p>
                                                        <p>&emsp; &#8226; Why are the unrealistic animals sometimes half 34)<?= soal_isian_ielts("jawaban_listening[33]", $listening_reading[33][1], $listening_reading[33][2])?>?</p>
                                                        <p><b>More recent explanation:</b></p>
                                                        <p>Wise men may have been trying to control wild animals with <b>35)<?= soal_isian_ielts("jawaban_listening[34]", $listening_reading[34][1], $listening_reading[34][2])?></b></p>
                                                        <p><b>Comment:</b></p>
                                                        <p>Earlier explanation was due to scholars over-generalising from their experience of a different culture.</p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </center>

                                    </div>
                                </div>

                                <div class="shadow card mb-3">
                                    <div class="card-body ps-4">
                                        <p class="question">
                                            Question 36 – 40<br>
                                            Complete the sentences below:<br>
                                            Write ONE WORD ONLY for each answer:<br>
                                        </p>

                                        <p>36. If you look at a site from a <?= soal_isian_ielts("jawaban_listening[35]", $listening_reading[35][1], $listening_reading[35][2])?>, you reduce visitor pressure.</p>
                                        <p>37. To camp on a site may be disrespectful to people from that <?= soal_isian_ielts("jawaban_listening[36]", $listening_reading[36][1], $listening_reading[36][2])?></p>
                                        <p>38. Undiscovered material may be damaged by <?= soal_isian_ielts("jawaban_listening[37]", $listening_reading[37][1], $listening_reading[37][2])?></p>
                                        <p>39. You should avoid <?= soal_isian_ielts("jawaban_listening[38]", $listening_reading[38][1], $listening_reading[38][2])?> or tracing rock art it is so fragile.</p>
                                        <p>40. In general, your aim is to leave the site <?= soal_isian_ielts("jawaban_listening[39]", $listening_reading[39][1], $listening_reading[39][2])?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="sesi-reading" style="display:nones">
                                <div class="shadow card mb-3">
                                    <div class="card-body ps-4">
                                        <p class="question">
                                            SECTION 1 Questions 1-15
                                        </p>
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="card">
                                                    <div class="card-body ps-4">
                                                        <p class="question">
                                                            Questions 1-3<br>
                                                            On the following page is a Contents page from a magazine.<br>
                                                            Answer question 1-3 by writing the appropriate page number or numbers where the information appears in the magazine, in boxes 1-3 in your answer sheet.
                                                        </p>
                
                                                        <table class="table">
                                                            <tr>
                                                                <td>
                                                                    <b><i>Example &emsp; : On what page is the main article in the magazine?</i></b><br>
                                                                    <b><i>Answer &emsp; : 5</i></b>
                                                                </td>
                                                            </tr>
                                                        </table>

                                                        <p><b>1).</b> What page would you turn to for advice about money? <?= soal_isian_ielts("jawaban_reading[0]", $listening_reading[40][1], $listening_reading[40][2])?></p>
                                                        <p><b>2).</b> On what TWO pages can you read about art? <?= soal_isian_ielts("jawaban_reading[1]", $listening_reading[41][1], $listening_reading[41][2])?></p>
                                                        <p><b>3).</b> On what page is the new sports stadium discussed? <?= soal_isian_ielts("jawaban_reading[2]", $listening_reading[42][1], $listening_reading[42][2])?></p>
                                                        <p class="question">
                                                            Question 4<br>
                                                            Answer Question 4 by writing NO MORE THAN THREE WORDS in box 4 on your answer sheet.
                                                        </p>
                                                        <p><b>4).</b> How often does this magazine appear? <?= soal_isian_ielts("jawaban_reading[3]", $listening_reading[43][1], $listening_reading[43][2])?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="card">
                                                    <div class="card-body ps-4">
                                                        <img src="<?= base_url()?>assets/img/gt_002_1-4.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="shadow card mb-3">
                                    <div class="card-body ps-4">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p class="question">
                                                            Questions 5-10<br><br>
                                                            Read the advertisements for musical concerts below and answer the questions that follow<br><br>
                                                            Answer the questions below by writing the appropriate letter or letters A-E in boxes 5-10 on your answer sheet. Your answer may require more than one letter.
                                                        </p>
                                                        <table class="table mb-3">
                                                            <tr>
                                                                <td>
                                                                    <b><i>Example &emsp; : At which concert will a television character appear?</i></b><br>
                                                                    <b><i>Answer &emsp; : B</i></b>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <p><b>5)</b> At which concert will young performers play? <?= soal_isian_ielts("jawaban_reading[4]", $listening_reading[44][1], $listening_reading[44][2])?></p>
                                                        <p><b>6)</b> Which concert will be held outdoors? <?= soal_isian_ielts("jawaban_reading[5]", $listening_reading[45][1], $listening_reading[45][2])?></p>
                                                        <p><b>7)</b> Which concerts will happen more than once? <?= soal_isian_ielts("jawaban_reading[6]", $listening_reading[46][1], $listening_reading[46][2])?></p>
                                                        <p><b>8)</b> Which concert will feature only one performer? <?= soal_isian_ielts("jawaban_reading[7]", $listening_reading[47][1], $listening_reading[47][2])?></p>
                                                        <p><b>9)</b> Which concert is NOT being held at night? <?= soal_isian_ielts("jawaban_reading[8]", $listening_reading[48][1], $listening_reading[48][2])?></p>
                                                        <p><b>10)</b> At which concert can the audience choose what will be performed? <?= soal_isian_ielts("jawaban_reading[9]", $listening_reading[49][1], $listening_reading[49][2])?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="card">
                                                    <div class="card-body ps-4">
                                                        <img src="<?= base_url()?>assets/img/gt_002_5-10.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="card shadow mb-3">
                                    <div class="card-body ps-4">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="card">
                                                    <div class="card-body ps-4">
                                                        <p class="question">
                                                            Questions 11-15<br><br>
                                                            The passage “First Aid for Snake Bites” explains what to do in the event of a snake bite.<br><br>
                                                            Read the additional instructions below and choose the section A-D to which each intruction belongs. Write the appropriate letter in boxes 11-15 on your answer sheet.<br>
                                                        </p>

                                                        <table class="table mb-3">
                                                            <tr>
                                                                <td>
                                                                    <b><i>Example &emsp; : Never use a tight bandage</i></b><br>
                                                                    <b><i>Answer &emsp; : D</i></b>
                                                                </td>
                                                            </tr>
                                                        </table>

                                                        <p>11. Help the casualty to sit or lie down <?= soal_isian_ielts("jawaban_reading[10]", $listening_reading[50][1], $listening_reading[22][2])?></p>
                                                        <p>12. Wear stout shoes, walk-socks and jeans (or similar clothing) in areas where snakes could be present <?= soal_isian_ielts("jawaban_reading[11]", $listening_reading[51][1], $listening_reading[22][2])?></p>
                                                        <p>13. Pain or tightness in the chest or abdomen <?= soal_isian_ielts("jawaban_reading[12]", $listening_reading[52][1], $listening_reading[22][2])?></p>
                                                        <p>14. Do not try to catch the snake <?= soal_isian_ielts("jawaban_reading[13]", $listening_reading[53][1], $listening_reading[22][2])?></p>
                                                        <p>15. Swelling of the bitten area <?= soal_isian_ielts("jawaban_reading[14]", $listening_reading[54][1], $listening_reading[22][2])?></p>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="card">
                                                    <div class="card-body ps-4">
                                                        <p class="question">
                                                            Questions 11-15<br>
                                                            Read the information below on treatment for snake bite, then answer Questions 11-15.
                                                        </p>
                                                        <img src="<?= base_url()?>assets/img/gt_002_11-15.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <?php
                                    $text = "
                                        <p><center><b>STUDENT ACCOMMODATION AT NORTHSIDE UNIVERSITY</b></center></p>
                                        <p class='reading-1'>Situated about 20km from the city centre, ((b))Northside University((/b)) is not easy to get to by public transport. However, students have several different alternatives for accommodation on or near the University campus.</p>
                                        <p class='reading-2'>Firstly, the University has several residential colleges; Burnside College, Boronia College and Helen Turner College. Each of these colleges provides a single fully furnished room with shared bathroom facilities, and meals. Burnside College is the most expensive, with 1996 fees ranging from $154 – $165 per week. However, each student room is equipped with a private telephone and voice-mailing facilities, and within the next few months, college students will have access to E-MAIL, On-Line library, INTERNET and AARNET via a network with the University. Boronia College has similar room facilities but does not offer the same computer access. It also offers only 17 meals per week, compared to Burnside’s 21. Fees vary from $147- $ 157 per week. Helen Turner College is a college exclusively for women, with similar fees to Boronia College. To attend classes, students have a short walk from the residential Colleges to the main University campus.</p>
                                        <p class='reading-3'>The University also provides 23 self-contained furnished townhouses. These townhouses have either 3, 4 or 6 bedrooms each and student residents are expected to be studying full-time. Rents in 1996 ranged from $54 per week for a room in a six bedroom flat to $68.50 per week for a room in a three-bedroom house. Students wanting to live in university housing should apply to the university housing officer in August of the previous year, as it is in high demand. Smoking is banned in University housing.</p>
                                        <p class='reading-4'>Off campus, there are many flats, townhouses and houses for rent in the local area. These can be found by looking in the local newspaper under ACCOMMODATION, or by checking notices pinned up on the boards around the university. There are always students advertising for housemates and you can even add a notice of your own to the board. However, even sharing accommodation with others can be expensive; tenants are usually required to pay a rental bond, rent in advance, and telephone/electricity/gas bills in addition to food bills. Be sure that you know what you will be required to pay before you enter into any written agreement.</p>
                                    ";
                                ?>

                                <div class="card shadow mb-3">
                                    <div class="card-body ps-4">
                                        <p class="question">
                                            Section 2	Questions 16-25 <br><br>
                                            Read “Student Accommodation at Northside University” below and answer the questions that follow.
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
                                                            Questions 16 – 19<br><br>
                                                            Choose the appropriate letter A-C and write it in boxes 16-19 on your answer sheet for questions 16-19.
                                                        </p>
    
                                                        <?php 
                                                            $data_soal_16_19 = [
                                                                [
                                                                    "no" => 16,
                                                                    "soal" => "The University Residential Colleges provide",
                                                                    "pilihan" => [
                                                                        "<b>A.</b> a place to live and regular classes",
                                                                        "<b>B.</b> regular classes only",
                                                                        "<b>C.</b> a place to live only."
                                                                    ],
                                                                    "name" => "jawaban_reading[15]",
                                                                    "jawaban" => $listening_reading[55][1],
                                                                    "status" => $listening_reading[55][2],
                                                                ],
                                                                [
                                                                    "no" => 17,
                                                                    "soal" => "Smoking is",
                                                                    "pilihan" => [
                                                                        "<b>A.</b> allowed in University housing",
                                                                        "<b>B.</b> not allowed in University housing",
                                                                        "<b>C.</b> allowed only in certain areas in University housing."
                                                                    ],
                                                                    "name" => "jawaban_reading[16]",
                                                                    "jawaban" => $listening_reading[56][1],
                                                                    "status" => $listening_reading[56][2],
                                                                ],
                                                                [
                                                                    "no" => 18,
                                                                    "soal" => "University townhouses are available for",
                                                                    "pilihan" => [
                                                                        "<b>A.</b> full-time students only",
                                                                        "<b>B.</b> part-time students only",
                                                                        "<b>C.</b> all students."
                                                                    ],
                                                                    "name" => "jawaban_reading[17]",
                                                                    "jawaban" => $listening_reading[57][1],
                                                                    "status" => $listening_reading[57][2],
                                                                ],
                                                                [
                                                                    "no" => 19,
                                                                    "soal" => "Accommodation in the area surrounding the university is",
                                                                    "pilihan" => [
                                                                        "<b>A.</b> scarce",
                                                                        "<b>B.</b> plentiful",
                                                                        "<b>C.</b> scarce and expensive."
                                                                    ],
                                                                    "name" => "jawaban_reading[18]",
                                                                    "jawaban" => $listening_reading[58][1],
                                                                    "status" => $listening_reading[58][2],
                                                                ],
                                                            ]
                                                        ?>
    
                                                        <?php foreach ($data_soal_16_19 as $data_soal) :?>
                                                            <?= soal_pg_ielts($data_soal)?>
                                                        <?php endforeach;?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                    $text = "
                                        <p><center><b>STUDENT ACCOMMODATION AT NORTHSIDE UNIVERSITY</b></center></p>
                                        <p class='reading-5'>Situated about 20km from the city centre, ((b))Northside University((/b)) is not easy to get to by public transport. However, students have several different alternatives for accommodation on or near the University campus.</p>
                                        <p class='reading-6'>Firstly, the University has several residential colleges; Burnside College, Boronia College and Helen Turner College. Each of these colleges provides a single fully furnished room with shared bathroom facilities, and meals. Burnside College is the most expensive, with 1996 fees ranging from $154 – $165 per week. However, each student room is equipped with a private telephone and voice-mailing facilities, and within the next few months, college students will have access to E-MAIL, On-Line library, INTERNET and AARNET via a network with the University. Boronia College has similar room facilities but does not offer the same computer access. It also offers only 17 meals per week, compared to Burnside’s 21. Fees vary from $147- $ 157 per week. Helen Turner College is a college exclusively for women, with similar fees to Boronia College. To attend classes, students have a short walk from the residential Colleges to the main University campus.</p>
                                        <p class='reading-7'>The University also provides 23 self-contained furnished townhouses. These townhouses have either 3, 4 or 6 bedrooms each and student residents are expected to be studying full-time. Rents in 1996 ranged from $54 per week for a room in a six bedroom flat to $68.50 per week for a room in a three-bedroom house. Students wanting to live in university housing should apply to the university housing officer in August of the previous year, as it is in high demand. Smoking is banned in University housing.</p>
                                        <p class='reading-8'>Off campus, there are many flats, townhouses and houses for rent in the local area. These can be found by looking in the local newspaper under ACCOMMODATION, or by checking notices pinned up on the boards around the university. There are always students advertising for housemates and you can even add a notice of your own to the board. However, even sharing accommodation with others can be expensive; tenants are usually required to pay a rental bond, rent in advance, and telephone/electricity/gas bills in addition to food bills. Be sure that you know what you will be required to pay before you enter into any written agreement.</p>
                                    ";
                                ?>

                                <div class="card shadow mb-3">
                                    <div class="card-body ps-4">
                                        <p class="question">
                                            Section 2	Questions 16-25 <br><br>
                                            Read “Student Accommodation at Northside University” below and answer the questions that follow.
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
                                                            Questions 20 – 25<br><br>
                                                            Complete the following sentences with information from the passage "Student Accommodation at Northside University".<br><br>
                                                            Write your answers in boxes 20-25 on your answer sheet. No more than two words and/ or a number.
                                                        </p>
                                                        <p>
                                                            A student living in a 3-bedroom University townhouse would pay (20)<?= soal_isian_ielts("jawaban_reading[19]", $listening_reading[59][1], $listening_reading[59][2])?> per week for a room; in comparison, the cheapest accommodation available at Burnside College is (21)<?= soal_isian_ielts("jawaban_reading[20]", $listening_reading[60][1], $listening_reading[60][2])?> per week. The fee charged at Burnside College includes (22)<?= soal_isian_ielts("jawaban_reading[21]", $listening_reading[61][1], $listening_reading[61][2])?> meals per week, but at Boronia College only (23)<?= soal_isian_ielts("jawaban_reading[22]", $listening_reading[62][1], $listening_reading[62][2])?> meals per week are included in the fee. Helen Turner College has a similar fee structure to (24)<?= soal_isian_ielts("jawaban_reading[23]", $listening_reading[63][1], $listening_reading[63][2])?> College, but only (25)<?= soal_isian_ielts("jawaban_reading[24]", $listening_reading[64][1], $listening_reading[64][2])?> may live there.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                    $text = "
                                    <p><b>Section A</b></p>
                                    <p class='reading-9'>Kormilda College is a unique school situated near Darwin in Australia’s Northern Territory. For 20 years, to 1989, Kormilda College operated as a government-run, live-in school for high school Aboriginal students. In 1989 it was bought from the Government by two Christian church groups and since then it has expanded enormously, to include a day school as well as boarders (residential students) in Years 8-12. Although 320 pupils of the College’s total number are Aboriginal students, drawn mainly from isolated communities across the Northern Territory, Kormilda also has a waiting list of non–aboriginal students. With a current enrolment of 600, student numbers are expected to grow to 860 by 1999.</p>

                                    <p><b>Section B</b></p>
                                    <p class='reading-10'>Central to the mission of the school is the encouragement of individual excellence, which has resulted in programs designed especially for the student population. Specialist support programs allow’ traditional Aboriginal students, who are often second language users, to understand and succeed in the mainstream curriculum. A Gifted and Talented Program, including a special Aboriginal and Torres Strait Islander Tertiary Aspirations program, has been introduced, as has an Adaptive Education Unit. Moreover, in Years 11 and 12, students may choose to follow the standard Northern Territory Courses or those of the International Baccalaureate (I.B.).</p>
                                    
                                    <p><b>Section C</b></p>
                                    <p class='reading-11'>To provide appropriate pastoral care, as well as a suitable academic structure, three distinct sub-schools have been established.</p>
                                    <p class='reading-12'>◼((u))Pre-Secondary((/u)) : For Aboriginal and Torres Strait Islander students in Years 8-10 who are of secondary school age but have difficulties reading and writing.</p>
                                    <p class='reading-13'>◼((u))Supported Secondary((/u)) : For Aboriginal and Torres Strait Islander students who are of secondary school age and operating at secondary school year levels 8-12 who need specific second language literacy and numeracy support.</p>
                                    <p class='reading-14'>◼((u))Secondary((/u)) : For multi-cultural Years 8-12 students.</p>
                                    <p class='reading-15'>Students remain in their sub-schools for classes in the main subject areas of English, Maths, Social Education and Science. This arrangement takes into account both diverse levels of literacy and the styles of learning and cultural understandings appropriate to traditional Aboriginal second-language users. In elective subjects chosen by the students – which include Indonesian, Music, Art, Drama, Science for Life, Commerce, Geography, Modem History, Woodwork, Metal Work, Economics and Legal Studies – students mix on the basis of subject interest.</p>

                                    <p><b>Section D</b></p>
                                    <p class='reading-16'>To aid the development of the Aboriginal Education program, a specialist curriculum Support Unit has been set up. One of its functions is to re-package school courses so that they can be taught in ways that suit the students.</p>
                                    <p class='reading-17'>The education program offered to Aboriginal students uses an approach which begins with the students’ own experiences and gradually builds bi-cultural understanding. In one course, “Introducing Western European Culture Through Traditional Story-Telling”, students are helped to build a common base for approaching the English literature curriculum. Drawing on the oral culture of traditional Aboriginal communities, they are introduced to traditional stories of other cultures, both oral and written. In a foundational Year 10 course, “Theory of Learning”, concepts from Aboriginal culture are placed side by side with European concepts so that students can use their own knowledge base to help bridge the cultural divide.</p>
                                    <p class='reading-18'>Another project of the Support Unit has been the publication of several books, the most popular, Korniihla Capers. The idea for Kormilda Capers came about when it became obvious that there was a lack of engaging material for the school’s teenage readers. One of the stories in the book, “The Bulman Mob hits the Big Smoke”, recounts the adventures of Kormilda pupils on their first visit to Sydney, Canberra and the snow country. Focussing on experiences which have directly affected the lives of students at the College, and on ideas and issues which are of immediate interest to Aboriginal students, Kormilda Capers has earned enthusiastic support within and outside the school.</p>
                                    "
                                ?>

                                <div class="card shadow mb-3">
                                    <div class="card-body ps-4">
                                        <p class="question">
                                            Section 3	Questions 26-40 <br><br>
                                            Read the passage below and answer the questions 26-40 that follow.
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
                                                        <p class='question'>
                                                            Questions 26 – 27<br><br>
                                                            Complete the following sentences with A NUMBER OR DATE from the passage.<br><br>
                                                            Write your answers in boxes 26-27 on your answer sheet.
                                                        </p>

                                                        <p>26. Kormilda College opened as a school in <?= soal_isian_ielts("jawaban_reading[25]", $listening_reading[65][1], $listening_reading[65][2])?><p>
                                                        <p>27. At the time of writing there were <?= soal_isian_ielts("jawaban_reading[26]", $listening_reading[66][1], $listening_reading[66][2])?> non-aboriginal students at Kormilda College.</p>

                                                        <p class="question">
                                                            Question 28<br><br>
                                                            From the list below, choose the best heading for Section B of the reading passage.<br><br>
                                                            Write the appropriate letter A-D in box 28 on pour answer sheet.
                                                        </p>

                                                        <p><b>A</b> Specialist teaching and teachers at Kormilda College</p>
                                                        <p><b>B</b> Special Programmes at Kormilda College for Aboriginal students</p>
                                                        <p><b>C</b> The new look Kormilda College</p>
                                                        <p><b>D</b> Programmes at Kormilda College to promote individual excellence</p>

                                                        <p>28.<?= soal_isian_ielts("jawaban_reading[27]", $listening_reading[67][1], $listening_reading[67][2])?><p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                    $text = "
                                    <p><b>Section A</b></p>
                                    <p class='reading-19'>Kormilda College is a unique school situated near Darwin in Australia’s Northern Territory. For 20 years, to 1989, Kormilda College operated as a government-run, live-in school for high school Aboriginal students. In 1989 it was bought from the Government by two Christian church groups and since then it has expanded enormously, to include a day school as well as boarders (residential students) in Years 8-12. Although 320 pupils of the College’s total number are Aboriginal students, drawn mainly from isolated communities across the Northern Territory, Kormilda also has a waiting list of non–aboriginal students. With a current enrolment of 600, student numbers are expected to grow to 860 by 1999.</p>

                                    <p><b>Section B</b></p>
                                    <p class='reading-20'>Central to the mission of the school is the encouragement of individual excellence, which has resulted in programs designed especially for the student population. Specialist support programs allow’ traditional Aboriginal students, who are often second language users, to understand and succeed in the mainstream curriculum. A Gifted and Talented Program, including a special Aboriginal and Torres Strait Islander Tertiary Aspirations program, has been introduced, as has an Adaptive Education Unit. Moreover, in Years 11 and 12, students may choose to follow the standard Northern Territory Courses or those of the International Baccalaureate (I.B.).</p>
                                    
                                    <p><b>Section C</b></p>
                                    <p class='reading-21'>To provide appropriate pastoral care, as well as a suitable academic structure, three distinct sub-schools have been established.</p>
                                    <p class='reading-22'>◼((u))Pre-Secondary((/u)) : For Aboriginal and Torres Strait Islander students in Years 8-10 who are of secondary school age but have difficulties reading and writing.</p>
                                    <p class='reading-23'>◼((u))Supported Secondary((/u)) : For Aboriginal and Torres Strait Islander students who are of secondary school age and operating at secondary school year levels 8-12 who need specific second language literacy and numeracy support.</p>
                                    <p class='reading-24'>◼((u))Secondary((/u)) : For multi-cultural Years 8-12 students.</p>
                                    <p class='reading-25'>Students remain in their sub-schools for classes in the main subject areas of English, Maths, Social Education and Science. This arrangement takes into account both diverse levels of literacy and the styles of learning and cultural understandings appropriate to traditional Aboriginal second-language users. In elective subjects chosen by the students – which include Indonesian, Music, Art, Drama, Science for Life, Commerce, Geography, Modem History, Woodwork, Metal Work, Economics and Legal Studies – students mix on the basis of subject interest.</p>

                                    <p><b>Section D</b></p>
                                    <p class='reading-26'>To aid the development of the Aboriginal Education program, a specialist curriculum Support Unit has been set up. One of its functions is to re-package school courses so that they can be taught in ways that suit the students.</p>
                                    <p class='reading-27'>The education program offered to Aboriginal students uses an approach which begins with the students’ own experiences and gradually builds bi-cultural understanding. In one course, “Introducing Western European Culture Through Traditional Story-Telling”, students are helped to build a common base for approaching the English literature curriculum. Drawing on the oral culture of traditional Aboriginal communities, they are introduced to traditional stories of other cultures, both oral and written. In a foundational Year 10 course, “Theory of Learning”, concepts from Aboriginal culture are placed side by side with European concepts so that students can use their own knowledge base to help bridge the cultural divide.</p>
                                    <p class='reading-28'>Another project of the Support Unit has been the publication of several books, the most popular, Korniihla Capers. The idea for Kormilda Capers came about when it became obvious that there was a lack of engaging material for the school’s teenage readers. One of the stories in the book, “The Bulman Mob hits the Big Smoke”, recounts the adventures of Kormilda pupils on their first visit to Sydney, Canberra and the snow country. Focussing on experiences which have directly affected the lives of students at the College, and on ideas and issues which are of immediate interest to Aboriginal students, Kormilda Capers has earned enthusiastic support within and outside the school.</p>
                                    "
                                ?>

                                <div class="card shadow mb-3">
                                    <div class="card-body ps-4">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="card">
                                                    <div class="card-body ps-4" style="height: 600px; overflow: scroll">
                                                        <?= $text?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="card">
                                                    <div class="card-body ps-4" style="height: 600px; overflow: scroll">
                                                        <p class="question">
                                                            Questions 29 – 33<br><br>
                                                            The following diagram shows how Kormilda College is organised. Complete the diagram using information from the text.<br><br>
                                                            Use NO MORE THAN THREE WORDS for each answer.<br><br>
                                                            Write your answers in boxes 29-33 on your answer sheet.
                                                        </p>

                                                        <img src="<?= base_url()?>assets/img/gt_002_29-33.png" alt="">

                                                        <p>29.<?= soal_isian_ielts("jawaban_reading[28]", $listening_reading[68][1], $listening_reading[68][2])?><p>
                                                        <p>30.<?= soal_isian_ielts("jawaban_reading[29]", $listening_reading[69][1], $listening_reading[69][2])?><p>
                                                        <p>31.<?= soal_isian_ielts("jawaban_reading[30]", $listening_reading[70][1], $listening_reading[70][2])?><p>
                                                        <p>32.<?= soal_isian_ielts("jawaban_reading[31]", $listening_reading[71][1], $listening_reading[71][2])?><p>
                                                        <p>33.<?= soal_isian_ielts("jawaban_reading[32]", $listening_reading[72][1], $listening_reading[72][2])?><p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                    $text = "
                                    <p><b>Section A</b></p>
                                    <p class='reading-29'>Kormilda College is a unique school situated near Darwin in Australia’s Northern Territory. For 20 years, to 1989, Kormilda College operated as a government-run, live-in school for high school Aboriginal students. In 1989 it was bought from the Government by two Christian church groups and since then it has expanded enormously, to include a day school as well as boarders (residential students) in Years 8-12. Although 320 pupils of the College’s total number are Aboriginal students, drawn mainly from isolated communities across the Northern Territory, Kormilda also has a waiting list of non–aboriginal students. With a current enrolment of 600, student numbers are expected to grow to 860 by 1999.</p>

                                    <p><b>Section B</b></p>
                                    <p class='reading-30'>Central to the mission of the school is the encouragement of individual excellence, which has resulted in programs designed especially for the student population. Specialist support programs allow’ traditional Aboriginal students, who are often second language users, to understand and succeed in the mainstream curriculum. A Gifted and Talented Program, including a special Aboriginal and Torres Strait Islander Tertiary Aspirations program, has been introduced, as has an Adaptive Education Unit. Moreover, in Years 11 and 12, students may choose to follow the standard Northern Territory Courses or those of the International Baccalaureate (I.B.).</p>
                                    
                                    <p><b>Section C</b></p>
                                    <p class='reading-31'>To provide appropriate pastoral care, as well as a suitable academic structure, three distinct sub-schools have been established.</p>
                                    <p class='reading-32'>◼((u))Pre-Secondary((/u)) : For Aboriginal and Torres Strait Islander students in Years 8-10 who are of secondary school age but have difficulties reading and writing.</p>
                                    <p class='reading-33'>◼((u))Supported Secondary((/u)) : For Aboriginal and Torres Strait Islander students who are of secondary school age and operating at secondary school year levels 8-12 who need specific second language literacy and numeracy support.</p>
                                    <p class='reading-34'>◼((u))Secondary((/u)) : For multi-cultural Years 8-12 students.</p>
                                    <p class='reading-35'>Students remain in their sub-schools for classes in the main subject areas of English, Maths, Social Education and Science. This arrangement takes into account both diverse levels of literacy and the styles of learning and cultural understandings appropriate to traditional Aboriginal second-language users. In elective subjects chosen by the students – which include Indonesian, Music, Art, Drama, Science for Life, Commerce, Geography, Modem History, Woodwork, Metal Work, Economics and Legal Studies – students mix on the basis of subject interest.</p>

                                    <p><b>Section D</b></p>
                                    <p class='reading-36'>To aid the development of the Aboriginal Education program, a specialist curriculum Support Unit has been set up. One of its functions is to re-package school courses so that they can be taught in ways that suit the students.</p>
                                    <p class='reading-37'>The education program offered to Aboriginal students uses an approach which begins with the students’ own experiences and gradually builds bi-cultural understanding. In one course, “Introducing Western European Culture Through Traditional Story-Telling”, students are helped to build a common base for approaching the English literature curriculum. Drawing on the oral culture of traditional Aboriginal communities, they are introduced to traditional stories of other cultures, both oral and written. In a foundational Year 10 course, “Theory of Learning”, concepts from Aboriginal culture are placed side by side with European concepts so that students can use their own knowledge base to help bridge the cultural divide.</p>
                                    <p class='reading-38'>Another project of the Support Unit has been the publication of several books, the most popular, Korniihla Capers. The idea for Kormilda Capers came about when it became obvious that there was a lack of engaging material for the school’s teenage readers. One of the stories in the book, “The Bulman Mob hits the Big Smoke”, recounts the adventures of Kormilda pupils on their first visit to Sydney, Canberra and the snow country. Focussing on experiences which have directly affected the lives of students at the College, and on ideas and issues which are of immediate interest to Aboriginal students, Kormilda Capers has earned enthusiastic support within and outside the school.</p>
                                    "
                                ?>

                                <div class="card shadow mb-3">
                                    <div class="card-body ps-4">
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
                                                            Questions 34 – 40<br><br>
                                                            Read the passage about Kormilda College and look at the statements below.<br><br>
                                                            In boxes 34 – 40 on pour answer sheet write:<br><br>
                                                        </p>
                                                        
                                                        <table class="table mb-3">
                                                            <tr>
                                                                <td>
                                                                    <b>TRUE</b>     if the statement is true
                                                                    <b>FALSE</b>   if the statement is not true
                                                                    <b>NOT GIVEN</b>   if the information is not given in the passage
                                                                </td>
                                                            </tr>
                                                        </table>

                                                        <?php
                                                            $data_soal_34_40 = [
                                                                [
                                                                    "no" => 34,
                                                                    "soal" => "Kormilda College educates both Aboriginal and non-Aboriginal students.",
                                                                    "pilihan" => ["TRUE", "FALSE", "NOT GIVEN"],
                                                                    "name" => "jawaban_reading[33]",
                                                                    "jawaban" => $listening_reading[73][1],
                                                                    "status" => $listening_reading[73][2],
                                                                ],
                                                                [
                                                                    "no" => 35,
                                                                    "soal" => "Some students travel from Arnhem Land to attend Kormilda College.",
                                                                    "pilihan" => ["TRUE", "FALSE", "NOT GIVEN"],
                                                                    "name" => "jawaban_reading[34]",
                                                                    "jawaban" => $listening_reading[74][1],
                                                                    "status" => $listening_reading[74][2],
                                                                ],
                                                                [
                                                                    "no" => 36,
                                                                    "soal" => "Students must study both the International Baccalaureate and Northern Territory courses.",
                                                                    "pilihan" => ["TRUE", "FALSE", "NOT GIVEN"],
                                                                    "name" => "jawaban_reading[35]",
                                                                    "jawaban" => $listening_reading[75][1],
                                                                    "status" => $listening_reading[75][2],
                                                                ],
                                                                [
                                                                    "no" => 37,
                                                                    "soal" => "The Pre-Secondary School attracts the best teachers.",
                                                                    "pilihan" => ["TRUE", "FALSE", "NOT GIVEN"],
                                                                    "name" => "jawaban_reading[36]",
                                                                    "jawaban" => $listening_reading[76][1],
                                                                    "status" => $listening_reading[76][2],
                                                                ],
                                                                [
                                                                    "no" => 38,
                                                                    "soal" => "The specialist curriculum Support Unit adapts school courses so the students can approach them more easily.",
                                                                    "pilihan" => ["TRUE", "FALSE", "NOT GIVEN"],
                                                                    "name" => "jawaban_reading[37]",
                                                                    "jawaban" => $listening_reading[77][1],
                                                                    "status" => $listening_reading[77][2],
                                                                ],
                                                                [
                                                                    "no" => 39,
                                                                    "soal" => "There are no oral traditional stories in Western communities.",
                                                                    "pilihan" => ["TRUE", "FALSE", "NOT GIVEN"],
                                                                    "name" => "jawaban_reading[38]",
                                                                    "jawaban" => $listening_reading[78][1],
                                                                    "status" => $listening_reading[78][2],
                                                                ],
                                                                [
                                                                    "no" => 40,
                                                                    "soal" => "The school helps the students make connections between Aboriginal and non-Aboriginal cultures.",
                                                                    "pilihan" => ["TRUE", "FALSE", "NOT GIVEN"],
                                                                    "name" => "jawaban_reading[39]",
                                                                    "jawaban" => $listening_reading[79][1],
                                                                    "status" => $listening_reading[79][2],
                                                                ],
                                                            ];
                                                        ?>

                                                            <?php foreach ($data_soal_34_40 as $data_soal) :?>
                                                                <?= soal_pg_ielts($data_soal);?>
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
                                        <p class="question mb-3">
                                            Writing Task 1<br>
                                            You should spend about 20 minutes on this task.
                                        </p>
                                        
                                        <p><i>You are organising a seminar for your company. Write a letter to the manager of another department inviting them to give a presentation at the seminar.</i></p>
                                        <p><b>In your letter,</b></p>
                                        <ul type="radio">
                                            <li>give details of the seminar</li>
                                            <li>invite them to give a presentation and say why you are inviting them</li>
                                            <li>say what the presentation should be about</li>
                                        </ul>
                                        <p>Write at least <b>150</b> words.</p>

                                        <p>You do <b>NOT</b> need to write any addresses.</p>
                                        <p>Begin your letter as follows:</p>
                                        <p><b>Dear ....................,</b></p>
                                        <!-- <p>You have a penfriend living in another country and he/she is curious to know about the major news items in your country.</p>
                                        <p>Briefly describe ONE news story that has been on TV, onl the radio, or in the newspapers in your country, and explain why people are interested in it.</p>
                                        <p>You should write at least 150 words.</p>
                                        <p>You do NOT need to write your own address. Begin your letter as follows:</p>
                                        <p>Dear _______,</p> -->

                                        <span>Type your answer here</span>
                                        <textarea class="form-control mb-3" name="text_writing[0]" data-bs-toggle="autosize" placeholder="" style="overflow: hidden scroll; overflow-wrap: break-word; resize: none; height: 56px;"><?= $writing[0]?></textarea>
                                        <p><?= str_word_count($writing[0])?> words</p>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-body">
                                        <p class="question mb-3">
                                            Writing Task 2<br>
                                            You should spend about 40 minutes on this task.
                                        </p>

                                        <p>As part of a class assignment you have to write about the following topic.</p>
                                        <p>A healthy person is often described as someone who has a good diet, gets lots of exercise, and avoids stress.</p>
                                        <p>What do people do to stay healthy in your country?</p>
                                        <p>You should write at least 250 words.</p>

                                        <span>Type your answer here</span>
                                        <textarea class="form-control mb-3" name="text_writing[1]" data-bs-toggle="autosize" placeholder="" style="overflow: hidden scroll; overflow-wrap: break-word; resize: none; height: 56px;"><?= $writing[1]?></textarea>
                                        <p><?= str_word_count($writing[1])?> words</p>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <a href="javascript:void(0)" class="btn btn-primary btnSimpan">Save</a>
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
    $('.form-autosize').on('input', function () {
        this.style.width = '60px';
            
        this.style.width = (this.scrollWidth) + 'px';
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
            html: 'Yakin telah mengakhiri sesi ini?',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then(function (result) {
            if (result.value) {
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
            html: 'Yakin telah mengakhiri sesi ini?',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then(function (result) {
            if (result.value) {
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
            html: 'Yakin akan memulai sesi ini?',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
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
            html: 'Yakin akan memulai sesi ini?',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
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

                sec = 70 * 60;
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
            html: 'Yakin akan memulai sesi ini?',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
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

                sec = 65 * 60;
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
            html: 'Yakin telah menyelesaikan tes Anda?',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then(function (result) {
            if (result.value) {
                swal.fire({
                    html: '<h4>Menyimpan Jawaban Anda ...</h4>',
                    allowOutsideClick: false,
                    showConfirmButton: false,
                    onBeforeOpen: () => {
                        Swal.showLoading()
                    },
                });

                $(".btnSimpan").html("Menyimpan...");
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
                    text: 'Waktu Anda telah habis untuk mengerjakan soal listening',
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
            } else {
                clearInterval(countDown);

                // scroll to top 
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $("#elementtoScrollToID").offset().top
                    }, 1000);
                }

                swal.fire({
                    title: 'Waktu Anda Telah Habis',
                    html: '<h4>Menyimpan Jawaban Anda ...</h4>',
                    allowOutsideClick: false,
                    showConfirmButton: false,
                    onBeforeOpen: () => {
                        Swal.showLoading()
                    },
                });

                $(".btnSimpan").html("Menyimpan...");
                $(".btnSimpan").prop("disabled", true);
                $(".btnBack").prop("disabled", true);
                $("#formIelts").submit()
            }
        }
    }

    for (let i = 1; i < 54; i++) {
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