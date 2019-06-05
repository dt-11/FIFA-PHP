<?php

require 'config.php';

session_start();

if ($_POST['type'] == 'delete'){
    $id = $_SESSION['sID'];
    $sqlDelete = "DELETE FROM teams WHERE teamUserId = :id";
    $prepareDelete = $db->prepare($sqlDelete);
    $prepareDelete->execute([
        ':id' => $id
    ]);
    header('location: overview.php');
    exit;
}

if ($_POST['type'] == 'edit') {
    $id = $_SESSION['sID'];
    $sql = "UPDATE teams SET
            teamName = :teamname,
            teamValue = :teamvalue
        WHERE teamUserId = :id
        ";
    $prepare = $db->prepare($sql);
    $prepare->execute([
        ':teamname' => $_POST['teamName'],
        ':teamvalue' => $_POST['teamValue'],
        ':id' => $id
    ]);
    header("location: overview.php");
    exit;
}

if ($_POST['type'] == 'createTeam') {
    $teamName = htmlentities(trim($_POST['teamName']));
    $teamPlayers = htmlentities(trim($_POST['playerValue']));
    $id = $_SESSION['sID'];

//$sqlId = "SELECT * FROM users WHERE userId = :id";
//$prepareId = $db->prepare($sqlId);
//$prepareId->execute([
//    ':id' => $id
//]);

    $sqlCheckTeam = "SELECT * FROM teams WHERE teamName = :teamName";
    $teamVerify = $db->prepare($sqlCheckTeam);
    $teamVerify->bindParam(":teamName", $teamName);
    $teamVerify->execute([
        ':teamName' => $teamName
    ]);
    $teamExist = $teamVerify->rowCount();
    if ($teamExist) {
        $message = "Team name already exists, choose a different team name.";
        header("location: register.php?msg=$message");
        exit;
    } else {
        $sqlCreateTeam = "INSERT INTO teams (teamName, teamValue, teamUserId )
                              VALUES (:teamName, :teamPlayers, :ownerId)";
        $prepareTeamCreate = $db->prepare($sqlCreateTeam);
        $prepareTeamCreate->execute([
            ':teamName' => $teamName,
            ':teamPlayers' => $teamPlayers,
            ':ownerId' => $id
        ]);
        $message = "Team has been succesfully made!";
        header("location: overview.php?msg=$message");
        exit;
    }
}

if ($_POST['type'] == 'score'){
    $sql = "SELECT teamAId, teamBId FROM matches";
    $query = $db->query($sql);
    $teams = $query->fetch(PDO::FETCH_ASSOC);

    $sql
    $id = $_GET['id'];

    $teamAScore = trim($_POST['teamAScore']);
	$teamBScore = trim($_POST['teamBScore']);

	if ($teamAScore <= 0 || $teamBScore <= 0) {
		header("Location: {$_SERVER['HTTP_REFERER']}");
        exit;
	}

	else{

        $previousScoreInt = (int) $teams['teamGoals'];
        $newScoreInt = (int) $teamBScore;

        $newScore = $previousScoreInt + $newScoreInt;
        echo $newScore;
//		$sqlScoreMatch = "UPDATE matches SET
//                      teamAScore = :teamAScore,
//                      teamBScore = :teamBScore
//                      WHERE matchId = :id";
//        $prepareScoreMatch = $db->prepare($sqlScoreMatch);
//        $prepareScoreMatch->bindParam(':id', $id);
//        $prepareScoreMatch->execute([
//                'id'    => $id,
//                ':teamAScore' => $teamAScore,
//                ':teamBScore' => $teamBScore
//        ]);
//
//        if(!isset()) {
//
//        }
//        else{
//            $updateGoals = "UPDATE teams SET
//                          teamGoals = :teamGoals
//                          WHERE teamId = :teamId";
//            $previousScoreInt = (int) $team['teamGoals'];
//            $newScoreInt = (int) $teamBScore;
//
//            $newScore = $previousScoreInt + $newScoreInt;
//        }


        //Dit werkt! VVVVVVVVVVVV
//        if ($teamAScore > $teamBScore) {
//
//            $sqlTeamA = "UPDATE teams SET
//                          teamScore = 3
//                          WHERE teamId = :teamId";
//            $prepareTeamA = $db->prepare($sqlTeamA);
//            $prepareTeamA->execute([
//                ':teamId' => $team['teamId']
//            ]);
//                echo "Team A heeft gewonnen!";
//                exit;
//
//        }


//        else if ($teamAScore < $teamBScore) {
////            $sqlTeamB = "INSERT INTO teams (teamScore)
////                            VALUES(3)
////                            WHERE teamId";
//            echo "Team B heeft gewonnen!";
//        }
//        else if($teamAScore === $teamBScore){
////            $sqlTeamA = "INSERT INTO teams (teamScore)
////                            VALUES(1)
////                            WHERE teamId";
////            $sqlTeamB = "INSERT INTO teams (teamScore)
////                            VALUES(1)
////                            WHERE teamId";
//            echo "Gelijk spel!";
//        }
	}
}