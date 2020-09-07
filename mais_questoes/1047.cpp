#include <stdio.h>

int main() {
	
	int horaIni = 0, minuIni = 0, horaFini = 0, minuFini = 0, hora = 0, minuto = 0;

	scanf("%d %d %d %d", &horaIni, &minuIni, &horaFini, &minuFini);
	
	minuto = minuFini - minuIni;
	
	if(horaIni > horaFini){
		hora = (horaFini - horaIni) + 24;	
		
	}else{
		hora = horaFini - horaIni;
	}
	
	if(minuto < 0){
		hora--;
		minuto += 60;
	}
	
	if(horaIni == horaFini and minuIni >= minuFini){
		hora+=24;
	}
	
	printf("O JOGO DUROU %d HORA(S) E %d MINUTO(S)\n", hora, minuto);
	
	return 0;
}
