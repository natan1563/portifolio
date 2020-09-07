#include <stdio.h>
#include <string.h>
int main() {
	
	int delimit = 0, count = 0, count2 = 0, filter = 0;
	char input[1000];
	
	scanf("%d", &delimit);
	
	while(count < delimit){
		scanf("%s", &input);
		count2 = 0;
		filter = 0;
		while(count2 < strlen(input)){
			
			if(input[count2] == '\0'){
				break;
			}else if(input[count2] == '<'){
				
			for(int count1 = count2; count1 < strlen(input); count1++){
					if(input[count1] == '\0'){
						break;
					}else if(input[count1] == '>'){
						filter++;
						input[count1] = '.';
						break;
					}
			
				}	
			
			}
			count2++;
		}
		
		printf("%d\n", filter);

		
		count++;	
	}
	
	return 0;
}
