<?php
// ready to use products count


function getTotalMonitorCount() {
    global $db;
    $sql = "SELECT count(*) as tot_mont FROM inventory WHERE conditionp = 'rtu' and category = 'Monitor'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) { 
            return $row['tot_mont'];
        }
    }

    return 0; // Return 0 if no rows are found
}

function getTotalKeyboardCount() {
    global $db;
    $sql = "SELECT count(*) as tot_mont FROM inventory WHERE conditionp = 'rtu' and category = 'Keyboard'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) { 
            return $row['tot_mont'];
        }
    }

    return 0; // Return 0 if no rows are found
}

function getTotalMouseCount() {
    global $db;
    $sql = "SELECT count(*) as tot_mont FROM inventory WHERE conditionp = 'rtu' and category = 'Mouse'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) { 
            return $row['tot_mont'];
        }
    }

    return 0; // Return 0 if no rows are found
}

function getTotalCPUCount() {
    global $db;
    $sql = "SELECT count(*) as tot_mont FROM inventory WHERE conditionp = 'rtu' and category = 'CPU'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) { 
            return $row['tot_mont'];
        }
    }

    return 0; // Return 0 if no rows are found
}

function getTotalHeadphoneCount() {
    global $db;
    $sql = "SELECT count(*) as tot_mont FROM inventory WHERE conditionp = 'rtu' and category = 'Headphones'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) { 
            return $row['tot_mont'];
        }
    }

    return 0; // Return 0 if no rows are found
}

function getTotalUPSCount() {
    global $db;
    $sql = "SELECT count(*) as tot_mont FROM inventory WHERE conditionp = 'rtu' and category = 'UPS'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) { 
            return $row['tot_mont'];
        }
    }

    return 0; // Return 0 if no rows are found
}

function getTotalLaptopCount() 
{
    global $db;
    $sql = "SELECT count(*) as tot_mont FROM inventory WHERE conditionp = 'rtu' and category = 'Laptop'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) { 
            return $row['tot_mont'];
        }
    }

    return 0; // Return 0 if no rows are found
}



// get rtu charger count 

function getTotalLaptopChargerCount() 
{
    global $db;
    $sql = "SELECT count(*) as tot_char FROM inventory WHERE conditionp = 'rtu' and category = 'Laptop-Charger'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) { 
            return $row['tot_char'];
        }
    }

    return 0; // Return 0 if no rows are found
}



//for dead counts

function getDeadMonitorCount() {
    global $db;
    $sql = "SELECT count(*) as tot_mont FROM inventory WHERE conditionp = 'dead' and category = 'Monitor'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 
            return $row['tot_mont'];
        }
    }

    return 0;
}

function getDeadKeyboardCount() {
    global $db;
    $sql = "SELECT count(*) as tot_mont FROM inventory WHERE conditionp = 'dead' and category = 'Keyboard'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 
            return $row['tot_mont'];
        }
    }

    return 0;
}

function getDeadMouseCount() {
    global $db;
    $sql = "SELECT count(*) as tot_mont FROM inventory WHERE conditionp = 'dead' and category = 'Mouse'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 
            return $row['tot_mont'];
        }
    }

    return 0;
}

function getDeadCPUCount() {
    global $db;
    $sql = "SELECT count(*) as tot_mont FROM inventory WHERE conditionp = 'dead' and category = 'CPU'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 
            return $row['tot_mont'];
        }
    }

    return 0;
}

function getDeadHeadphoneCount() {
    global $db;
    $sql = "SELECT count(*) as tot_mont FROM inventory WHERE conditionp = 'dead' and category = 'Headphones'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 
            return $row['tot_mont'];
        }
    }

    return 0;
}

function getDeadUPSCount() {
    global $db;
    $sql = "SELECT count(*) as tot_mont FROM inventory WHERE conditionp = 'dead' and category = 'UPS'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 
            return $row['tot_mont'];
        }
    }

    return 0;
}

function getDeadLaptopCount() {
    global $db;
    $sql = "SELECT count(*) as tot_mont FROM inventory WHERE conditionp = 'dead' and category = 'Laptop'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 
            return $row['tot_mont'];
        }
    }

    return 0;
}

// get dead charger count

function getDeadLaptopChargerCount() {
    global $db;
    $sql = "SELECT count(*) as tot_char FROM inventory WHERE conditionp = 'dead' and category = 'Laptop-Charger'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 
            return $row['tot_char'];
        }
    }

    return 0;
}


//for assigned conunt
function getAssignedMonitorCount() {
    global $db;
    $sql = "SELECT count(*) as tot_mont FROM inventory WHERE conditionp = 'assigned' and category = 'Monitor'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 
            return $row['tot_mont'];
        }
    }

    return 0;
}

function getAssignedKeyboardCount() {
    global $db;
    $sql = "SELECT count(*) as tot_mont FROM inventory WHERE conditionp = 'assigned' and category = 'Keyboard'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 
            return $row['tot_mont'];
        }
    }

    return 0;
}

function getAssignedMouseCount() {
    global $db;
    $sql = "SELECT count(*) as tot_mont FROM inventory WHERE conditionp = 'assigned' and category = 'Mouse'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 
            return $row['tot_mont'];
        }
    }

    return 0;
}

function getAssignedCPUCount() {
    global $db;
    $sql = "SELECT count(*) as tot_mont FROM inventory WHERE conditionp = 'assigned' and category = 'CPU'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 
            return $row['tot_mont'];
        }
    }

    return 0;
}

function getAssignedHeadphoneCount() {
    global $db;
    $sql = "SELECT count(*) as tot_mont FROM inventory WHERE conditionp = 'assigned' and category = 'Headphones'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 
            return $row['tot_mont'];
        }
    }

    return 0;
}

function getAssignedUPSCount() {
    global $db;
    $sql = "SELECT count(*) as tot_mont FROM inventory WHERE conditionp = 'assigned' and category = 'UPS'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 
            return $row['tot_mont'];
        }
    }

    return 0;
}

function getAssignedLaptopCount() {
    global $db;
    $sql = "SELECT count(*) as tot_mont FROM inventory WHERE conditionp = 'assigned' and category = 'Laptop'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 
            return $row['tot_mont'];
        }
    }

    return 0;
}


// get assigned charger count

function getAssignedLaptopChargerCount() 
{
    global $db;
    $sql = "SELECT count(*) as tot_char FROM inventory WHERE conditionp = 'assigned' and category = 'Laptop-Charger'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) 
        { 
            return $row['tot_char'];
        }
    }

    return 0;
}

//need to repair products count
//for daead counts

function getrepairMonitorCount() {
    global $db;
    $sql = "SELECT count(*) as tot_mont FROM inventory WHERE conditionp = 'repair' and category = 'Monitor'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 
            return $row['tot_mont'];
        }
    }

    return 0;
}

function getrepairKeyboardCount() {
    global $db;
    $sql = "SELECT count(*) as tot_mont FROM inventory WHERE conditionp = 'repair' and category = 'Keyboard'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 
            return $row['tot_mont'];
        }
    }

    return 0;
}

function getrepairMouseCount() {
    global $db;
    $sql = "SELECT count(*) as tot_mont FROM inventory WHERE conditionp = 'repair' and category = 'Mouse'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 
            return $row['tot_mont'];
        }
    }

    return 0;
}

function getrepairCPUCount() {
    global $db;
    $sql = "SELECT count(*) as tot_mont FROM inventory WHERE conditionp = 'repair' and category = 'CPU'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 
            return $row['tot_mont'];
        }
    }

    return 0;
}

function getrepairHeadphoneCount() {
    global $db;
    $sql = "SELECT count(*) as tot_mont FROM inventory WHERE conditionp = 'repair' and category = 'Headphones'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 
            return $row['tot_mont'];
        }
    }

    return 0;
}

function getrepairUPSCount() {
    global $db;
    $sql = "SELECT count(*) as tot_mont FROM inventory WHERE conditionp = 'repair' and category = 'UPS'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 
            return $row['tot_mont'];
        }
    }

    return 0;
}

function getrepairLaptopCount() {
    global $db;
    $sql = "SELECT count(*) as tot_mont FROM inventory WHERE conditionp = 'repair' and category = 'Laptop'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 
            return $row['tot_mont'];
        }
    }

    return 0;
}


// get repair charger count

function getrepairLaptopChargerCount() {
    global $db;
    $sql = "SELECT count(*) as tot_char FROM inventory WHERE conditionp = 'repair' and category = 'Laptop-Charger'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 
            return $row['tot_char'];
        }
    }

    return 0;
}




// RTU
$totalMonitorCount = getTotalMonitorCount();
$totalKeyboardCount = getTotalKeyboardCount();
$totalMouseCount = getTotalMouseCount();
$totalCPUCount = getTotalCPUCount();
$totalHeadphoneCount = getTotalHeadphoneCount();
$totalUPSCount = getTotalUPSCount();
$totalLaptopCount = getTotalLaptopCount();
$totalLaptopChargerCount = getTotalLaptopChargerCount();


// Dead
$deadMonitorCount = getDeadMonitorCount();
$deadKeyboardCount = getDeadKeyboardCount();
$deadMouseCount = getDeadMouseCount();
$deadCPUCount = getDeadCPUCount();
$deadHeadphoneCount = getDeadHeadphoneCount();
$deadUPSCount = getDeadUPSCount();
$deadLaptopCount = getDeadLaptopCount();
$deadLaptopChargerCount = getDeadLaptopChargerCount();

// Repair
$repairMonitorCount = getrepairMonitorCount();
$repairKeyboardCount = getrepairKeyboardCount();
$repairMouseCount = getrepairMouseCount();
$repairCPUCount = getrepairCPUCount();
$repairHeadphoneCount = getrepairHeadphoneCount();
$repairUPSCount = getrepairUPSCount();
$repairLaptopCount = getrepairLaptopCount();
$repairLaptopChargerCount =  getrepairLaptopChargerCount();

// Assigned
$assignedMonitorCount = getAssignedMonitorCount();
$assignedKeyboardCount = getAssignedKeyboardCount();
$assignedMouseCount = getAssignedMouseCount();
$assignedCPUCount = getAssignedCPUCount();
$assignedHeadphoneCount = getAssignedHeadphoneCount();
$assignedUPSCount = getAssignedUPSCount();
$assignedLaptopCount = getAssignedLaptopCount();
$assignedLaptopChargerCount = getAssignedLaptopChargerCount();

?>
