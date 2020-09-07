#include <stdio.h>



int main() {
	
	char name1[30], name2[30], name3[30];
	
	scanf("%s %s %s", &name1, &name2, &name3);
	
	switch(name1, name2, name3){
		
		case 'Nata': case: 'Romao': case 'Ferreira':
			printf("Nata Romao Ferreira");
			break;
		default:
			printf("Nome indefinido");
	}
	
	return 0;
}
