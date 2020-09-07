#include <stdio.h>

int main(){
	int input = 0; 
	const int pass = 2002;
	
	scanf("%d", &input);
	
	while(input != pass){
		printf("Senha Invalida\n");
		scanf("%d", &input);
	}
	
	if(input == pass){
		printf("Acesso Permitido\n");
	}
	return 0;
}
