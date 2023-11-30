<div class="form-group">
						<?php
						$valueCheckNames = [
								'check2111', 'check2112', 'check2113', 'check2114', 'check2115', 'check2116'
						];

						$labels = [
								'a) Con Acuse de recibo por parte del Congreso Local.',
								'b) Gaceta del gobierno estatal en la que fue publicada.',
								'c) Objetivos, estrategias y metas.',
								'd) Descripción de los riesgos relevantes para las finanzas públicas.',
								'e) Proyección de las finanzas públicas.',
								'f) Resultados de las finanzas públicas de dos años anteriores.'
						];
						?>
						<?php for ($i = 0; $i < count($valueCheckNames); $i++) : ?>
								<label>
										<input type="checkbox" name="<?= $valueCheckNames[$i] ?>" value="<?= $valueCheckNames[$i] ?>" >
										<?= $labels[$i] ?>
								</label><br>
						<?php endfor; ?>

							<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="" value="" class="btn btn-success">Guardar</button>
							</div>
							<!--Salto de parrafo 2.1.1-->
						</div>


                        div class="form-group">

							<label><input type="checkbox" name="" value="">a) Con Acuse de recibo por parte del Congreso Local.</label>

							<label><input type="checkbox" name="" value="">b) Gaceta del gobierno estatal en la que fue publicada.</label>

							<label><input type="checkbox" name="" value="">c) Objetivos, estrategias y metas</label>

							<label><input type="checkbox" name="" value="">d) Descripción de los riesgos relevantes para las finanzas públicas.</label>

							<label><input type="checkbox" name="" value="">e) Proyección de las finanzas públicas un año (si la población del municipio es igual o menor a
						200 mil habitantes) o a tres años (si la población del municipio es mayor a 200 habitantes)).</label>

							<label><input type="checkbox" name="" value="">f) Resultados de las finanzas públicas de dos años anteriores.</label>
							

							<div class="btn-group" role="group" aria-label="">
								<button type="submit" name="" value="" class="btn btn-success">Guardar</button>
							</div>
							<!--Salto de parrafo 2.1.1-->
						</div>