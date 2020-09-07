#include <stdio.h>
#include <string.h>

int main() {
	
	char valu0e1[30], value2[30], value3[30];
	
	scanf("%s", &value1); 
	scanf("%s", &value2);
	scanf("%s", &value3);
	
	if(strcmp(value1, "vertebrado") == 0 and strcmp(value2, "ave") == 0 and strcmp(value3, "carnivoro") == 0){
		printf("aguia\n");
	}else if(strcmp(value1, "vertebrado") == 0 and strcmp(value2, "ave") == 0 and strcmp(value3, "onivoro") == 0){
		printf("pomba\n");
	}else if(strcmp(value1, "vertebrado") == 0 and strcmp(value2, "mamifero") == 0 and strcmp(value3, "onivoro") == 0){
		printf("homem\n");
	}else if(strcmp(value1, "vertebrado") == 0 and strcmp(value2, "mamifero") == 0 and strcmp(value3, "herbivoro") == 0){
		printf("vaca\n");
	}else if(strcmp(value1, "invertebrado") == 0 and strcmp(value2, "inseto") == 0 and strcmp(value3, "hematofago") == 0){
		printf("pulga\n");
	}else if(strcmp(value1, "invertebrado") == 0 and strcmp(value2, "inseto") == 0 and strcmp(value3, "herbivoro") == 0){
		printf("lagarta\n");
	}else if(strcmp(value1, "invertebrado") == 0 and strcmp(value2, "anelideo") == 0 and strcmp(value3, "hematofago") == 0){
		printf("sanguessuga\n");
	}else if(strcmp(value1, "invertebrado") == 0 and strcmp(value2, "anelideo") == 0 and strcmp(value3, "onivoro") == 0){
		printf("minhoca\n");
	}
	
		
	
	return 0;
}
