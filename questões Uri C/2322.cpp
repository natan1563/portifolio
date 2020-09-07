#include <stdio.h>

int main(){
	
	int input = 0, value = 0, somar = 0, somar2 = 0, maior = 0, menor = 0, newsoma = 0, cont2 = 0;
	
	scanf("%d", &input);
	
	while(cont2 <= input){
			newsoma+=cont2;
			cont2++;
		}
		
	for(int count = 1; count < input; count++){
		scanf("%d", &value);
		
		if(count <= (value - 1) || value >=3){
			somar+=value;
		}else{
			somar2+=value;
		}
	}
	
	
	if(somar > somar2){
		maior = somar;
		menor = somar2;
	}else{
		maior = somar2;
		menor = somar;
	}
	
	printf("%d\n", newsoma - (maior + menor));
	
	return 0;
}
