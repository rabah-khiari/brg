 <?php
$text = array_merge($text, [
    // Table Headers
    'Housing_Title' => [
        'fr' => 'LOGEMENTS',
        'en' => 'HOUSING'
    ],
    
    // Row 1: Mahalma
    'Desc_Mahalma' => [
        'fr' => 'Suivi des 1256 (ex 2000) Logements Location-vente tranche 2002 à MAHALMA',
        'en' => 'Monitoring of 1,256 (formerly 2000) Rent-to-own Housing units, 2002 phase in MAHALMA'
    ],
    // Row 2: Ain Naadja
    'Desc_AinNaadja' => [
        'fr' => 'Etude et Suivi des 2248 Logements Ain Naadja',
        'en' => 'Design and Monitoring of 2,248 Housing units in Ain Naadja'
    ],
    // Row 3: Sidi Hamed
    'Desc_SidiHamed' => [
        'fr' => 'Etude des 4032/10 000 Logements LPL à Sidi Hamed Wilaya de Blida',
        'en' => 'Design of 4,032/10,000 Social Housing units (LPL) in Sidi Hamed, Blida Province'
    ],
    // Row 4: Larbaa
    'Desc_Larbaa' => [
        'fr' => 'Etude des 2956/10000 Logements LPL Larbaa Wilaya de Blida',
        'en' => 'Design of 2,956/10,000 Social Housing units (LPL) in Larbaa, Blida Province'
    ],
    // Row 5, 6, 7: Chlef Projects
    'Desc_Chlef1' => [
        'fr' => 'Etude et Suivi des 250/2900/3000 Logements LPL à Oued Fares Chlef',
        'en' => 'Design and Monitoring of 250/2,900/3,000 Social Housing units (LPL) in Oued Fares, Chlef'
    ],
    'Desc_Chlef2' => [
        'fr' => 'Suivi des 200/3000 Logements LPL à Ouled Fares Chlef',
        'en' => 'Monitoring of 200/3,000 Social Housing units (LPL) in Ouled Fares, Chlef'
    ],
    'Desc_Chlef3' => [
        'fr' => 'Etude et Suivi des 200/1810/3000 Logements LPL à Ouled Fares Chlef',
        'en' => 'Design and Monitoring of 200/1,810/3,000 Social Housing units (LPL) in Ouled Fares, Chlef'
    ],
    // Row 8: Tiaret R+4
    'Desc_TiaretSocial' => [
        'fr' => 'Etude et suivi 765 Logements sociaux (en R+4) à Tiaret',
        'en' => 'Design and Monitoring of 765 Social Housing units (5-story buildings) in Tiaret'
    ],
    // Row 9: RHP Chlef
    'Desc_RHP' => [
        'fr' => 'Etude et Suivi 416/2100 Logements RHP Chlef',
        'en' => 'Design and Monitoring of 416/2,100 Slum Clearance Housing (RHP) in Chlef'
    ],
    // Row 10 & 11: Kaid Ahmed
    'Desc_KaidAhmed' => [
        'fr' => 'Suivi 500 Logements Kaid Ahmed location-vente Tiaret',
        'en' => 'Monitoring of 500 Rent-to-own Housing units in Kaid Ahmed, Tiaret'
    ],
    // Row 12: Tiaret 600
    'Desc_Tiaret600' => [
        'fr' => 'Etude et Suivi des 600 Logements sociaux Tiaret',
        'en' => 'Design and Monitoring of 600 Social Housing units in Tiaret'
    ],
    // Row 13: Tlemcen 426
    'Desc_Tlemcen426' => [
        'fr' => 'Etude et suivi du projet 426 logement/Champ de tir Tlemcen',
        'en' => 'Design and Monitoring of 426 Housing units in Champ de Tir, Tlemcen'
    ],
    // Row 14: VRD Tlemcen
    'Desc_VRD' => [
        'fr' => 'Suivi des travaux de VRD (124+31)/230 logement "Les Lilas"/Champ de tir Tlemcen',
        'en' => 'Monitoring of Utilities and Infrastructure (VRD) for "Les Lilas" project, Tlemcen'
    ],
]);
?>
 <br>
<div class="container mt-3">  
  <h2><?= $text['Housing_Title'][$language]; ?></h2>
  <table class="table">
    <thead>
      <tr>
        <th><?= $text['Client'][$language]; ?></th>
        <th><?= $text['Project_Title'][$language]; ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>AADL/ Ain Naadja</td>
        <td><?= $text['Desc_Mahalma'][$language]; ?></td>
      </tr>
      <tr>
        <td>ENPI</td>
        <td><?= $text['Desc_AinNaadja'][$language]; ?></td>
      </tr>
      <tr>
        <td>CEDY (Chinese Enterprise)</td>
        <td><?= $text['Desc_SidiHamed'][$language]; ?></td>
      </tr>
      <tr>
        <td>CEDY (Chinese Enterprise)</td>
        <td><?= $text['Desc_Larbaa'][$language]; ?></td>
      </tr>
      <tr>
        <td>OPGI / Chlef</td>
        <td><?= $text['Desc_Chlef1'][$language]; ?></td>
      </tr>
      <tr>
        <td>OPGI / Chlef</td>
        <td><?= $text['Desc_Chlef2'][$language]; ?></td>
      </tr>
      <tr>
        <td>OPGI / Chlef</td>
        <td><?= $text['Desc_Chlef3'][$language]; ?></td>
      </tr>
      <tr>
        <td>OPGI / Tiaret</td>
        <td><?= $text['Desc_TiaretSocial'][$language]; ?></td>
      </tr>
      <tr>
        <td>OPGI / Chlef</td>
        <td><?= $text['Desc_RHP'][$language]; ?></td>
      </tr>
      <tr>
        <td>AADL / Mascara</td>
        <td><?= $text['Desc_KaidAhmed'][$language]; ?></td>
      </tr>
      <tr>
        <td>AADL / Mascara</td>
        <td><?= $text['Desc_KaidAhmed'][$language]; ?></td>
      </tr>
      <tr>
        <td>OPGI / Tiaret</td>
        <td><?= $text['Desc_Tiaret600'][$language]; ?></td>
      </tr>
      <tr>
        <td>SPI / CNEP-IMMO</td>
        <td><?= $text['Desc_Tlemcen426'][$language]; ?></td>
      </tr>
      <tr>
        <td>SPI / CNEP-IMMO</td>
        <td><?= $text['Desc_VRD'][$language]; ?></td>
      </tr>
    </tbody>
  </table>
</div>