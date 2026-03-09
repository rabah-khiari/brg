<?php
$text = array_merge($text, [
    // Table Headers
    'Hospitals_Title' => [
        'fr' => 'HÔPITAUX',
        'en' => 'HOSPITALS',
        'ar' => 'المستشفيات',
    ],
    'Client' => [
        'fr' => 'Client',
        'en' => 'Client',
        'ar' => 'الزبون',
    ],
    'Project_Title' => [
        'fr' => 'Intitulé du projet',
        'en' => 'Project Description',
        'ar' => 'تسمية المشروع',
    ],

    // Row 1: Blockhaus
    'Desc_Blockhaus' => [
        'fr' => "Maitrise d'Œuvre d'un Blockhaus au CHU Bab El Oued (Unité CYCLOTRON et TEP) (Médecine NUCLEAIRE) en TCE - Wilaya d'Alger",
        'en' => "Project Management for a Bunker at Bab El Oued University Hospital (CYCLOTRON and PET Unit) (NUCLEAR Medicine) All Trades - Algiers",
        'ar' => "إدارة مشروع إنجاز مخبأ (\u{2067}Blockhaus\u{2069}) بالمركز الاستشفائي الجامعي (\u{2067}CHU\u{2069}) باب الوادي (وحدة \u{2067}CYCLOTRON\u{2069} و \u{2067}TEP\u{2069}) (الطب النووي) بجميع التخصصات (\u{2067}TCE\u{2069}) - ولاية الجزائر",
    ],
    // Row 2: Pediatric Oncology
    'Desc_Pediatric' => [
        'fr' => "Maitrise d'Œuvre D'un Service d'Oncologie Pédiatrique en R+5 avec Sous-Sol",
        'en' => "Project Management of a Pediatric Oncology Department (5 floors + Basement)",
        'ar' => "إدارة مشروع مصلحة أورام الأطفال في مبنى \u{2067}R+5\u{2069} مع طابق تحت الأرض",
    ],
    // Row 3: Rehabilitation
    'Desc_Rehab' => [
        'fr' => "Suivi en vue des travaux d'aménagement, de réhabilitation du service de médecine nucléaire du CHU de Bab el Oued",
        'en' => "Monitoring of development and rehabilitation works for the Nuclear Medicine department at Bab El Oued University Hospital",
        'ar' => "متابعة أعمال تهيئة وإعادة تأهيل مصلحة الطب النووي بالمركز الاستشفائي الجامعي (\u{2067}CHU\u{2069}) باب الوادي",
    ],
    // Row 4: Polyclinic
    'Desc_Poly' => [
        'fr' => "Etude et Suivi d’une Polyclinique Theniet El Had Wilaya de Tissemsilt",
        'en' => "Design and Monitoring of a Polyclinic in Theniet El Had, Tissemsilt",
        'ar' => "دراسة ومتابعة عيادة متعددة الخدمات بثنية الأحد - ولاية تيسمسيلت",
    ],
    // Row 5: Mostaganem
    'Desc_Mosta' => [
        'fr' => "Etude et Suivi d’un Hôpital 120 lits à Mostaganem",
        'en' => "Design and Monitoring of a 120-bed Hospital in Mostaganem",
        'ar' => "دراسة ومتابعة مستشفى \u{2067}120\u{2069} سرير بمستغانم",
    ],
    // Row 6: Psych Adrar
    'Desc_Psych' => [
        'fr' => "Etude et suivi d’un Hôpital psychiatrique de 120 lits à Adrar",
        'en' => "Design and Monitoring of a 120-bed Psychiatric Hospital in Adrar",
        'ar' => "دراسة ومتابعة مستشفى للأمراض العقلية \u{2067}120\u{2069} سرير بأدرار",
    ],
    // Row 7: Adrar 240
    'Desc_Adrar240' => [
        'fr' => "Etude et suivi D’un Hôpital de 240 lits à Adrar",
        'en' => "Design and Monitoring of a 240-bed Hospital in Adrar",
        'ar' => "دراسة ومتابعة مستشفى \u{2067}240\u{2069} سرير بأدرار",
    ],
    // Row 8: Ouargla Cancer
    'Desc_Ouargla' => [
        'fr' => "Etude et Suivi d’un Centre Anti-Cancer à Ouargla",
        'en' => "Design and Monitoring of an Oncology Center in Ouargla",
        'ar' => "دراسة ومتابعة مركز لمكافحة السرطان بورقلة",
    ],
    // Row 9: Tlemcen Cancer
    'Desc_Tlemcen' => [
        'fr' => "Etude et Suivi d’un Centre Anti-Cancer de 120 lits à Tlemcen",
        'en' => "Design and Monitoring of a 120-bed Oncology Center in Tlemcen",
        'ar' => "دراسة ومتابعة مركز لمكافحة السرطان \u{2067}120\u{2069} سرير بتلمسان",
    ],
    // Row 10: Thenia
    'Desc_Thenia' => [
        'fr' => "Etude et Suivi d’un Hôpital 120 lits à Ténia",
        'en' => "Design and Monitoring of a 120-bed Hospital in Thenia",
        'ar' => "دراسة ومتابعة مستشفى \u{2067}120\u{2069} سرير بالثنية",
    ],
]);
?>
<br>
<div class="container mt-3">  
    <h2><?= $text['Hospitals_Title'][$language]; ?></h2>
    <table class="table">
        <thead>
            <tr>
                <th <?php echo ($language == 'ar') ? 'dir="rtl"' : ''; ?>><?= $text['Client'][$language]; ?></th>
                <th><?= $text['Project_Title'][$language]; ?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>CHU Maillot</td>
                <td <?php echo ($language == 'ar') ? 'dir="rtl"' : ''; ?>><?= $text['Desc_Blockhaus'][$language]; ?></td>
            </tr>
            <tr>
                <td>CHU Maillot</td>
                <td <?php echo ($language == 'ar') ? 'dir="rtl"' : ''; ?>><?= $text['Desc_Pediatric'][$language]; ?></td>
            </tr>
            <tr>
                <td>CHU Maillot</td>
                <td <?php echo ($language == 'ar') ? 'dir="rtl"' : ''; ?>><?= $text['Desc_Rehab'][$language]; ?></td>
            </tr>
            <tr>
                <td>DSP Tissemsilt</td>
                <td <?php echo ($language == 'ar') ? 'dir="rtl"' : ''; ?>><?= $text['Desc_Poly'][$language]; ?></td>
            </tr>
            <tr>
                <td>DSP Mostaganem</td>
                <td <?php echo ($language == 'ar') ? 'dir="rtl"' : ''; ?>><?= $text['Desc_Mosta'][$language]; ?></td>
            </tr>
            <tr>
                <td>DLEP/ Adrar</td>
                <td <?php echo ($language == 'ar') ? 'dir="rtl"' : ''; ?>><?= $text['Desc_Psych'][$language]; ?></td>
            </tr>
            <tr>
                <td>DLEP/ Adrar</td>
                <td <?php echo ($language == 'ar') ? 'dir="rtl"' : ''; ?>><?= $text['Desc_Adrar240'][$language]; ?></td>
            </tr>
            <tr>
                <td>DSP Ouargla</td>
                <td <?php echo ($language == 'ar') ? 'dir="rtl"' : ''; ?>><?= $text['Desc_Ouargla'][$language]; ?></td>
            </tr>
            <tr>
                <td>DSP Tlemcen</td>
                <td <?php echo ($language == 'ar') ? 'dir="rtl"' : ''; ?>><?= $text['Desc_Tlemcen'][$language]; ?></td>
            </tr>
            <tr>
                <td>DSP Boumerdes</td>
                <td <?php echo ($language == 'ar') ? 'dir="rtl"' : ''; ?>   ><?= $text['Desc_Thenia'][$language]; ?></td>
            </tr>
        </tbody>
    </table>
</div>