
							<div class="card-body">
								<form autocomplete="off" class="form" role="form" action="index.php" method="post">
									<div class="form-group row">
										<label class="col-lg-3 col-form-label form-control-label"></label>
										<div class="col-lg-9">
											<input class="btn btn-primary" type="submit" name="btnsubmit" value="Generate QR Code">
										</div>
									</div>
								</form>
								<?php
 									include "phpqrcode/qrlib.php";
 									$PNG_TEMP_DIR = 'temp/';
 									if (!file_exists($PNG_TEMP_DIR))
									    mkdir($PNG_TEMP_DIR);

									$filename = $PNG_TEMP_DIR . 'test.png';

									if (isset($_POST["btnsubmit"])) {
										
									function getRandomBytes($length = 16)
									{
									    if (function_exists('random_bytes')) {
									        $bytes = random_bytes($length / 2);
									    } else {
									        $bytes = openssl_random_pseudo_bytes($length / 2);
									    }
									    return bin2hex($bytes);
									}
									$code = getRandomBytes();

									$codeString = $code . "\n";

									$filename = $PNG_TEMP_DIR . 'test' . md5($codeString) . '.png';

									QRcode::png($codeString, $filename);

									echo '<img src="' . $PNG_TEMP_DIR . basename($filename) . '" /><hr/>';
								}

								?>
	