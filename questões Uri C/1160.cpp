#include <stdio.h>

int main() {
	
	int del = 0, PA = 0, PB = 0, anos;
	double G1 = 0, G2 = 0;
	scanf("%d", &del);
	
	for(int count = 1; count <= del; count++){
		scanf("%d %d %lf %lf", &PA, &PB, &G1, &G2);
		anos = 0;
		while(PA <= PB){
			PA += (PA * G1) / 100;
			PB += (PB * G2) / 100;
			anos++;
			
			if(anos > 100){
				printf("Mais de 1 seculo.\n");
				break;
			}
		}
		
		if(anos <= 100){
			printf("%d anos.\n", anos);
		}
	}
	
	return 0;
}
