#include <stdio.h>
int main(){
	
	int i;
	int p = 0;
	double soma = 0, media;
	double x = 0;

	for(i = 1 ; i <= 6; i++){
		
		scanf("%lf", &x);
		if(x > 0){
		    p++;
		    soma += x;
		}
	}
   
   printf("%lf", soma);
    media = soma / p;
    
    printf("%d valores positivos\n", p);
    printf("%.1lf\n", media);
    
   return 0;
   }

