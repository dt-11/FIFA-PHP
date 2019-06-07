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
    $id = $_GET['id'];

    $sql = "SELECT teamAId, teamBId FROM matches
            WHERE matchId = :id";
    $prepare = $db->prepare($sql);
    $prepare->execute([
        ':id' => $id
    ]);
    $teamIds = $prepare->fetch(PDO::FETCH_ASSOC);
    $teamAId = $teamIds['teamAId'];
    $teamBId = $teamIds['teamBId'];


    $sqlTeamA = "SELECT * FROM teams
                     WHERE teamId = :teamAId";
    $prepareTeamA = $db->prepare($sqlTeamA);
    $prepareTeamA->execute([
        ':teamAId' => $teamAId,
    ]);
    $teamA = $prepareTeamA->fetch(PDO::FETCH_ASSOC);


    $sqlTeamB = "SELECT * FROM teams
                     WHERE teamId = :teamBId";
    $prepareTeamB = $db->prepare($sqlTeamB);
    $prepareTeamB->execute([
        ':teamBId' => $teamBId,
    ]);
    $teamB = $prepareTeamB->fetch(PDO::FETCH_ASSOC);


    $teamAScore = trim($_POST['teamAScore']);
	$teamBScore = trim($_POST['teamBScore']);

	if ($teamAScore <= 0 || $teamBScore <= 0) {
		header("Location: {$_SERVER['HTTP_REFERER']}");
        exit;
	}
	else{

	    if (isset($teamA['teamGoals']) == 0){
            $updateGoals = "UPDATE teams SET
                            teamGoals = :teamGoals
                            WHERE teamId = :teamId";
            $prepareUpdateGoals  = $db->prepare($updateGoals);
            $prepareUpdateGoals->execute([
                ':teamId'    => $teamAId,
                ':teamGoals' => $teamAScore
            ]);
            header("location: admin.php");
            exit;
        }
	    else{
            $previousScoreInt = (int) $teamA['teamGoals'];
            $newScoreInt = (int) $teamAScore;

            $newScore = $previousScoreInt + $newScoreInt;

            $updateGoals = "UPDATE teams SET
                            teamGoals = :teamGoals
                            WHERE teamId = :teamId";
            $prepareUpdateGoals  = $db->prepare($updateGoals);
            $prepareUpdateGoals->execute([
                ':teamId'    => $teamAId,
                ':teamGoals' => $newScore
            ]);
        }
        if (isset($teamB['teamGoals']) == 0){
            $updateGoals = "UPDATE teams SET
                            teamGoals = :teamGoals
                            WHERE teamId = :teamId";
            $prepareUpdateGoals  = $db->prepare($updateGoals);
            $prepareUpdateGoals->execute([
                ':teamId'    => $teamBId,
                ':teamGoals' => $teamBScore
            ]);
            header("location: admin.php");
            exit;
        }
        else{
            $previousScoreInt = (int) $teamB['teamGoals'];
            $newScoreInt = (int) $teamBScore;

            $newScore = $previousScoreInt + $newScoreInt;

            $updateGoals = "UPDATE teams SET
                            teamGoals = :teamGoals
                            WHERE teamId = :teamId";
            $prepareUpdateGoals  = $db->prepare($updateGoals);
            $prepareUpdateGoals->execute([
                ':teamId'    => $teamBId,
                ':teamGoals' => $newScore
            ]);
            header("location: admin.php");
        }



        if ($teamAScore > $teamBScore) {
            if (isset($teamA['teamScore']) == 0){
                $updateScore = "UPDATE teams SET
                          teamScore = 3
                          WHERE teamId = :teamId";
                $prepareUpdateScore = $db->prepare($updateScore);
                $prepareUpdateScore->execute([
                    ':teamId' => $teamAId
                ]);
                exit;
            }
            if (isset($teamA['teamScore']) > 0){
                $oldPoints = (int) $teamA['teamScore'];
                $newPoints = $oldPoints + 3;

                $updateScore = "UPDATE teams SET
                          teamScore = :teamScore
                          WHERE teamId = :teamId";
                $prepareUpdateScore = $db->prepare($updateScore);
                $prepareUpdateScore->execute([
                    ':teamId'    => $teamAId,
                    ':teamScore' => $newPoints
                ]);
                exit;
            }
        }



        if ($teamAScore < $teamBScore) {
            if (isset($teamB['teamScore']) == 0){
                $updateScore = "UPDATE teams SET
                          teamScore = 3
                          WHERE teamId = :teamId";
                $prepareUpdateScore = $db->prepare($updateScore);
                $prepareUpdateScore->execute([
                    ':teamId' => $teamBId
                ]);
                exit;
            }
            if (isset($teamB['teamScore']) > 0){
                $oldPoints = (int) $teamB['teamScore'];
                $newPoints = $oldPoints + 3;

                $updateScore = "UPDATE teams SET
                          teamScore = :teamScore
                          WHERE teamId = :teamId";
                $prepareUpdateScore = $db->prepare($updateScore);
                $prepareUpdateScore->execute([
                    ':teamId'    => $teamBId,
                    ':teamScore' => $newPoints
                ]);
                exit;
            }
        }

        if($teamAScore === $teamBScore) {
            if (isset($teamA['teamScore']) == 0){
                $updateScore = "UPDATE teams SET
                          teamScore = 1
                          WHERE teamId = :teamId";
                $prepareUpdateScore = $db->prepare($updateScore);
                $prepareUpdateScore->execute([
                    ':teamId' => $teamAId
                ]);
            }
            if(isset($teamA['teamScore']) > 0){
                $oldPointsA = (int) $teamA['teamScore'];
                $newPointsA = $oldPointsA + 1;

                $updateScoreTeamA = "UPDATE teams SET
                          teamScore = :teamScore
                          WHERE teamId = :teamId";
                $prepareUpdateScoreTeamA = $db->prepare($updateScoreTeamA);
                $prepareUpdateScoreTeamA->execute([
                    ':teamId'    => $teamAId,
                    ':teamScore' => $newPointsA
                ]);
            }

            if (isset($teamB['teamScore']) == 0){
                $updateScore = "UPDATE teams SET
                          teamScore = 1
                          WHERE teamId = :teamId";
                $prepareUpdateScore = $db->prepare($updateScore);
                $prepareUpdateScore->execute([
                    ':teamId' => $teamBId
                ]);
            }
            if (isset($teamB['teamScore']) > 0){
                $oldPointsB = (int) $teamB['teamScore'];
                $newPointsB = $oldPointsB + 1;

                $updateScoreTeamB = "UPDATE teams SET
                          teamScore = :teamScore
                          WHERE teamId = :teamId";
                $prepareUpdateScoreTeamB = $db->prepare($updateScoreTeamB);
                $prepareUpdateScoreTeamB->execute([
                    ':teamId'    => $teamBId,
                    ':teamScore' => $newPointsB
                ]);
                header("location: tournament.php");
                exit;
            }
        }
	}
}