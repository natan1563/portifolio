#include <stdio.h>

int main() {
	
	int input, input2, menu, count = 1;
	
	scanf("%d",&input);
	
	for(count; count <= input; count++){
		
		scanf("%d", &input2);
		int count2 = 1;
		
		while(count2 <= input2){
			scanf("%d", &menu);
			switch(menu){
				
				case 1:
					printf("Rolien\n");
					break;
				case 2:
					printf("Naej\n");
					break;
				case 3:
					printf("Elehcim\n");
					break;
				case 4:
					printf("Odranoel\n");
					break;
			}	
			count2++;
		}
	}
	return 0;
}
