#include <stdio.h>

int main() {
	
	int H1, M1, H2, M2, hora, minuto;
	
	scanf("%d %d %d %d", &H1, &M1, &H2, &M2);
	
	hora = H2 - H1;
	
	if(hora < 0){
		hora += 24;
	}
	
	minuto = M2 - M1;
	
	if(minuto < 0){
		minuto += 60;
		hora--;
	}
	
	if(H1 == H2 && M1 == M2){
		printf("O JOGO DUROU 24 HORA(S) E 0 MINUTOS\n");
	}else {
		printf("O JOGO DUROU %d HORA(S) E %d MINUTO(S)\n", hora, minuto);
	}
	
	return 0;	
}
