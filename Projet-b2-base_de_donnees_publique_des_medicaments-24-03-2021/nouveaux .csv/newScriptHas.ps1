$csv = Import-Csv -Path 'CIS_HAS_SMR_bdpm.csv'  -Delimiter ";"


Foreach($line in $csv) { 

    $newCSV = $line.c1 + ";"
    $newCSV = $newCSV + $line.c2 + ";"
    $newCSV = $newCSV + $line.c3 + ";" 
    


    $newDate = $line.date 
    $newdate = $newDate.insert(4, "-")
    $newdate = $newDate.insert(7, "-")

    $newCSV = $newCSV + $newDate +";" 

    $newCSV = $newCSV + $line.c5 +";" 
    $newCSV = $newCSV +$line.c6
    
    Add-Content  CIS_HAS_bdpmV2lsdkflskd.csv $newCSV
    
}

Write-Host "Fin " 