<?php
$text = array_merge($text, [
    // Table Headers
    'Hospitals_Title' => [
        'fr' => 'HÔPITAUX',
        'en' => 'HOSPITALS'
    ],
    'Client' => [
        'fr' => 'Client',
        'en' => 'Client'
    ],
    'Project_Title' => [
        'fr' => 'Intitulé du projet',
        'en' => 'Project Description'
    ],

    // Row 1: Blockhaus
    'Desc_Blockhaus' => [
        'fr' => "Maitrise d'Œuvre d'un Blockhaus au CHU Bab El Oued (Unité CYCLOTRON et TEP) (Médecine NUCLEAIRE) en TCE - Wilaya d'Alger",
        'en' => "Project Management for a Bunker at Bab El Oued University Hospital (CYCLOTRON and PET Unit) (NUCLEAR Medicine) All Trades - Algiers"
    ],
    // Row 2: Pediatric Oncology
    'Desc_Pediatric' => [
        'fr' => "Maitrise d'Œuvre D'un Service d'Oncologie Pédiatrique en R+5 avec Sous-Sol",
        'en' => "Project Management of a Pediatric Oncology Department (5 floors + Basement)"
    ],
    // Row 3: Rehabilitation
    'Desc_Rehab' => [
        'fr' => "Suivi en vue des travaux d'aménagement, de réhabilitation du service de médecine nucléaire du CHU de Bab el Oued",
        'en' => "Monitoring of development and rehabilitation works for the Nuclear Medicine department at Bab El Oued University Hospital"
    ],
    // Row 4: Polyclinic
    'Desc_Poly' => [
        'fr' => "Etude et Suivi d’une Polyclinique Theniet El Had Wilaya de Tissemsilt",
        'en' => "Design and Monitoring of a Polyclinic in Theniet El Had, Tissemsilt"
    ],
    // Row 5: Mostaganem
    'Desc_Mosta' => [
        'fr' => "Etude et Suivi d’un Hôpital 120 lits à Mostaganem",
        'en' => "Design and Monitoring of a 120-bed Hospital in Mostaganem"
    ],
    // Row 6: Psych Adrar
    'Desc_Psych' => [
        'fr' => "Etude et suivi d’un Hôpital psychiatrique de 120 lits à Adrar",
        'en' => "Design and Monitoring of a 120-bed Psychiatric Hospital in Adrar"
    ],
    // Row 7: Adrar 240
    'Desc_Adrar240' => [
        'fr' => "Etude et suivi D’un Hôpital de 240 lits à Adrar",
        'en' => "Design and Monitoring of a 240-bed Hospital in Adrar"
    ],
    // Row 8: Ouargla Cancer
    'Desc_Ouargla' => [
        'fr' => "Etude et Suivi d’un Centre Anti-Cancer à Ouargla",
        'en' => "Design and Monitoring of an Oncology Center in Ouargla"
    ],
    // Row 9: Tlemcen Cancer
    'Desc_Tlemcen' => [
        'fr' => "Etude et Suivi d’un Centre Anti-Cancer de 120 lits à Tlemcen",
        'en' => "Design and Monitoring of a 120-bed Oncology Center in Tlemcen"
    ],
    // Row 10: Thenia
    'Desc_Thenia' => [
        'fr' => "Etude et Suivi d’un Hôpital 120 lits à Ténia",
        'en' => "Design and Monitoring of a 120-bed Hospital in Thenia"
    ],
]);
?>
<br>
<div class="container mt-3">  
    <h2><?= $text['Hospitals_Title'][$language]; ?></h2>
    <table class="table">
        <thead>
            <tr>
                <th><?= $text['Client'][$language]; ?></th>
                <th><?= $text['Project_Title'][$language]; ?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>CHU Maillot</td>
                <td><?= $text['Desc_Blockhaus'][$language]; ?></td>
            </tr>
            <tr>
                <td>CHU Maillot</td>
                <td><?= $text['Desc_Pediatric'][$language]; ?></td>
            </tr>
            <tr>
                <td>CHU Maillot</td>
                <td><?= $text['Desc_Rehab'][$language]; ?></td>
            </tr>
            <tr>
                <td>DSP Tissemsilt</td>
                <td><?= $text['Desc_Poly'][$language]; ?></td>
            </tr>
            <tr>
                <td>DSP Mostaganem</td>
                <td><?= $text['Desc_Mosta'][$language]; ?></td>
            </tr>
            <tr>
                <td>DLEP/ Adrar</td>
                <td><?= $text['Desc_Psych'][$language]; ?></td>
            </tr>
            <tr>
                <td>DLEP/ Adrar</td>
                <td><?= $text['Desc_Adrar240'][$language]; ?></td>
            </tr>
            <tr>
                <td>DSP Ouargla</td>
                <td><?= $text['Desc_Ouargla'][$language]; ?></td>
            </tr>
            <tr>
                <td>DSP Tlemcen</td>
                <td><?= $text['Desc_Tlemcen'][$language]; ?></td>
            </tr>
            <tr>
                <td>DSP Boumerdes</td>
                <td><?= $text['Desc_Thenia'][$language]; ?></td>
            </tr>
        </tbody>
    </table>
</div>