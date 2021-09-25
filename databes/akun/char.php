<?php 
include 'includes/config.php'; 
include 'includes/header.php';
checkForLogin();
?>
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            My Characters
                        </h1>
                    </div>
                </div>

			<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
									<?php
									$loggedinID = $_SESSION['pID'];
									$query = $con->prepare("SELECT * from characters where pID = '$loggedinID'");
									$query->execute();

									while($gData = $query->fetch())
									{	
										?>
										<br />
										<a href="char.php?id=<?php echo $gData['skin']; ?>">
										<img src="../skins/Skin_<?php echo $gData['skin']; ?>.png"></a>
										<a href="char.php?id=<?php echo $gData['charid']; ?>"><?php echo $gData['charname']; ?></a>
										<br />
										
										<?php
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

<?php
include 'includes/footer.php'; 
?>
