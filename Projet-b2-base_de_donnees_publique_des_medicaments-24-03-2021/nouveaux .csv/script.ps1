Write-Host "Debut" 

$csv = Import-Csv -Path 'CIS_InfoImportantes_20200325090204_bdpm.csv'  -Delimiter ";"


Foreach($line in $csv) { 

    $newCSV = $line.codeCIS + ";"
    $newCSV = $newCSV + $line.dateDebut + ";"
    $newCSV = $newCSV + $line.dateFin +";" 
    
    $linetext = $line.text 

    $linetext = $linetext -split "title=", 2
    $rest = $linetext[1]
    $rest = $rest -split " href=", 2 

    $title = $rest[0]
    $rest = $rest[1]

    $rest = $rest -split ">", 2
    $href = $rest[0]
    $rest = $rest[1]

    $rest = $rest -split "</", 2
    $balise = "'" + $rest[0] + "'"

    $newCSV = $newCSV + $title + ";" + $href + ";" + $balise + "` "
    
    Add-Content  newCSV2.csv $newCSV
    
}


Write-Host "Fin " 

