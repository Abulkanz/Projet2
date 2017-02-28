<html>
	<body style="background: #eeffc3; /* Pour les navigateurs qui ne supporteraient pas gradient */
		background: -webkit-linear-gradient(left, #3b4031, #eeffc3, #3b4031); /* For Safari 5.1 to 6.0 */
		background: -o-linear-gradient(right, #3b4031, #eeffc3, #3b4031); /* For Opera 11.1 to 12.0 */
		background: -moz-linear-gradient(right, #3b4031, #eeffc3, #3b4031); /* For Firefox 3.6 to 15 */
		background: linear-gradient(to right, #3b4031, #eeffc3, #3b4031); /* Standard syntax */
		margin: 0px;
		width: 100%;
		height: 100%;">
		</style>
        {foreach from=$corspmail item=mail}
		<table style="border:#a8cbff 1px solid;
			boder-collapse:collapse;
			width:50%;
			margin:auto;">
			<thead>
				<tr>
					<td colspan="7" align="center"><h1>Fiche de l'animal</h1></td>
				</tr>
				<tr>
					<td colspan="7" align="center"><img src="http://92.39.241.41/plesk-site-preview/arossignol.fr/92.39.241.41/authentification/img/imgFiches/{$mail.photo}"></td>
                    <td style="display:none;"></td>
				</tr>
			</thead>
			<tfoot style="display:none;">
			</tfoot>
			<tbody>
				<tr>
					<td style="border:#a8cbff 1px solid; height:30px;">Prénom</td>
					<td style="border:#a8cbff 1px solid; height:30px;">{$mail.prenomAnimal}</td>
				</tr>
				<tr>
					<td style="border:#a8cbff 1px solid; height:30px;">Poids</td>
					<td style="border:#a8cbff 1px solid; height:30px;">{$mail.poids}</td>
				</tr>
				<tr>
					<td style="border:#a8cbff 1px solid; height:30px;">Taille</td>
					<td style="border:#a8cbff 1px solid; height:30px;">{$mail.taille}</td>
				</tr>
				<tr>
					<td style="border:#a8cbff 1px solid; height:30px;">Statut</td>
					<td style="border:#a8cbff 1px solid; height:30px;">{$mail.statut}</td>
				</tr>
				<tr>
					<td style="border:#a8cbff 1px solid; height:30px;">Date de naissance</td>
					<td style="border:#a8cbff 1px solid; height:30px;">{$mail.date_naissance}</td>
				</tr>
				<tr>
					<td style="border:#a8cbff 1px solid; height:30px;">Lieu de naissance</td>
					<td style="border:#a8cbff 1px solid; height:30px;">{$mail.lieu_naissance}</td>
				</tr>
				<tr>
					<td style="border:#a8cbff 1px solid; height:30px;">Sexe</td>
					<td style="border:#a8cbff 1px solid; height:30px;">{$genre}</td>
				</tr>
				<tr>
					<td style="border:#a8cbff 1px solid; height:30px;">Lieu de vie</td>
					<td style="border:#a8cbff 1px solid; height:30px;">{$mail.idParcelle}</td>
				</tr>
				<tr>
					<td style="border:#a8cbff 1px solid; height:30px;">Description</td>
					<td style="border:#a8cbff 1px solid; height:30px;">{$mail.description}</td>
				</tr>
			</tbody>
		</table>
        {/foreach}
	</body>
</html>