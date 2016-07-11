		<NAV id="menuprincipal">
			<UL id="ulMenu"><!--Lista de enlaces-->
				<A href="index.php" title="Curriculum Online Fryntiz"><LI class="toinicio">INICIO</LI></A>
				<LI class="tocv" onClick="cambiarIdBody('pagcv')">C.V.</LI>
				<LI class="tocvext" onClick="cambiarIdBody('pagcvext')">C.V. ++</LI>
				<LI class="todescargas" onClick="cambiarIdBody('pagdescargas')">DESCARGAR</LI>
				<LI class="tocontacto" onClick="cambiarIdBody('pagcontacto')">CONTACTO</LI>
				<LI class="tomasinfo" onClick="cambiarIdBody('pagmasinfo')">MÁS INFO+</LI>
			</UL>

			<DIV id="mostrarMenu" onclick="activarMenuSuperior()"><IMG src="./images/iconos/menu.png" />MENÚ</DIV>
			<UL id="ulMenuMINI"><!--Lista de enlaces smartphones-->
				<LI id="cancelarmenu" onclick="cerrarMenuSuperior()">CERRAR</LI>
				<A href="index.php" title="Curriculum Online Fryntiz"><LI class="toinicio">INICIO</LI></A>
				<LI class="tocv" onClick="cambiarIdBody('pagcv')">C.V.</LI>
				<LI class="tocvext" onClick="cambiarIdBody('pagcvext')">C.V. ++</LI>
				<LI class="todescargas" onClick="cambiarIdBody('pagdescargas')">DESCARGAR</LI>
				<LI class="tocontacto" onClick="cambiarIdBody('pagcontacto')">CONTACTO</LI>
				<LI class="tomasinfo" onClick="cambiarIdBody('pagmasinfo')">MÁS INFO+</LI>
			</UL>
		</NAV>

<SCRIPT>
//Donde lleva cada enlace mediante la función rotar()
rotar(".tocv", "contenidoCV.php");
rotar(".tocvext", "contenidoCVampliado.php");
rotar(".todescargas", "contenidoDescargas.php");
rotar(".tocontacto", "contenidoContacto.php");
rotar(".tomasinfo", "contenidoMasInfo.php");
</SCRIPT>
