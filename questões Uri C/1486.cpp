#include <stdio.h>



int main() {
	
	int delimit, linha, coluna, count = 0, count1 = 0, count2 = 0, count3 = 0, arm = 0, bin[1001], geral;
	
	
	while(scanf("%d %d %d", &linha, &coluna, &delimit) and delimit != 0 and linha != 0 and coluna != 0){
		count = 0;
			for(int i = 0; i < coluna; i++){
				arm = 0;
				count2 = 0;
				for(int k = 0; k < linha; k++){
					
					while(count2 < linha){
						scanf("%d", &bin[count2]);
						count2++;
					}
	
					if(bin[k]==1){
						arm++;
					}
					//
					if(arm >= delimit ){
						arm = 0;
						geral++;
					}
				}
				
			}
		printf("%d\n", geral);
		geral = 0;
	}
	
	return 0;
}
