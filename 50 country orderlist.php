<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country List</title>
</head>
<body>
  
        <ol>
        <?php
        $country = [
            "India", "Afghanistan", "Australia", "China", "South Korea", "Russia", "United States", "Canada", 
            "Brazil", "Argentina", "United Kingdom", "Germany", "France", "Italy", "Spain", "Japan", 
            "Mexico", "South Africa", "Egypt", "Nigeria", "Saudi Arabia", "Turkey", "Iran", "Iraq", 
            "Israel", "Pakistan", "Bangladesh", "Indonesia", "Malaysia", "Philippines", "Vietnam", "Thailand", 
            "New Zealand", "Singapore", "Greece", "Netherlands", "Sweden", "Norway", "Denmark", "Finland", 
            "Switzerland", "Austria", "Poland", "Ukraine", "Czech Republic", "Portugal", "Hungary", "Belgium", 
            "Ireland", "Chile", "Peru"
        ];

        foreach ($country as $value) {
            echo "<li>$value</li>";
        }
        ?>
        </ol>
  
</body>
</html>
