<?php

	function commentDisplay($comments){
		$commentContent ="";
		foreach ($comments as $comment){
			$commentContent =
			$commentContent												.
			"<div  class='greybox'>"									.
				date('F j, Y, g:i a', $comment['created'])				.
				"</br>"													.
				__prettyTripFormatter($comment['tripcode'])				.
				nl2br(htmlentities(stripslashes($comment['message']))) 	. 
				"</br></br>"													.
			"</div>";
		};
		return $commentContent;
	}
	
	function taskDisplay($tasks){
		$taskDisplayContent ="";				$i=1;
		foreach($tasks as $task){
			$taskDisplayContent = $taskDisplayContent."
				<div class='task".( $i%2)."'>
					<span class='title'>
						<a href='?q=/view/".$task['task_id']."' >".substr(htmlentities(stripslashes($task['title'])),0,40)."</a>
					</span>
					<span class='message'>".substr(htmlentities(stripslashes($task['message'])),0,100)."
					</span>
				</div>";
			$i++;
		};
		return $taskDisplayContent;
	}
?>