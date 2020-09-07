#include <stdio.h>


int main() {
	
	int N[20], aux[20], trad[20], x = 0, y = 0;
	
	for(int i = 0; i < 20; i++){
		scanf("%d", &N[i]);
		//printf("N[%d] = %d\n", i, N[i]); DEBUGG
	}
		
		for(int k = 9, x = 20, y = 0; k >= 0; k--){
			x--;
			aux[y] = N[y];//Recebeu indice 0
			trad[y] = N[x]; // Recebeu indice 4
		
		//	printf("Trad: %d\n", trad[y]); DEBUGG
		
			N[x] = aux[y];
		
		//	printf("Inicio: %d\n", N[x]); DEBUGG
		
			N[y] = trad[y];
		
		//	printf("FIM: %d\n", N[y]); DEBUGG
		
			//printf("Nj[%d] = %d\nNk[%d] = %d\n", j, N[j], x, N[x]); DEBUGG
		
			y++;
			
		}
	
	
	for(int i = 0; i < 20; i++){
		printf("N[%d] = %d\n", i, N[i]);
	}
	return 0;
}
