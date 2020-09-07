#include <stdio.h>

int main() {
	
	int delimit, saldo, newSaldo = 0, moviment = 0, arm = 0;
	
	scanf("%d %d", &delimit, &saldo);
	
	newSaldo = saldo;
	
	for(int count = 1; count <= delimit; count++){
		
		scanf("%d", &moviment);	
		saldo += moviment;
	
		if(saldo < newSaldo){
			newSaldo = saldo;
		}
			
	}
	
	printf("%d\n", newSaldo);
	return 0;
}
