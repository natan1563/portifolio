#include <stdio.h>


int main(){
	
	int iniDia = 0, fimDia = 0, iniHora = 0, finiHora = 0, iniMini = 0, finiMini = 0 , iniSec = 0, finiSec = 0, dia = 0, hora = 0, minuto = 0 , segundo = 0;
	
	printf("Dia ");
	scanf("%d\n %d : %d : %d", &iniDia, &iniHora, &iniMini, &iniSec);
	printf("Dia ");
	scanf("%d\n %d : %d : %d", &fimDia, &finiHora, &finiMini, &finiSec);
	dia = fimDia - iniDia;
	hora = finiHora - iniHora;
	minuto = finiMini - iniMini;
	segundo = finiSec - iniSec;
	
	if(segundo < 0){
		minuto--;
		segundo+=60;
	}
	if(minuto < 0){
		hora--;
		minuto+=60;
	}
	if(hora < 0){
		dia--;
		hora+=24;
	}
	
	printf("%d dia(s)\n", dia);
	printf("%d hora(s)\n", hora);
	printf("%d minuto(s)\n", minuto);
	printf("%d segundo(s)\n", segundo);
	
	return 0;
}
