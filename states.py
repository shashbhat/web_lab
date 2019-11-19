import re
states="Mississippi Alabama Texas Massachusetts Kansas"
statesArr=states.split()
statesList=list()
for val in statesArr:
	if(re.search('xas$',val)):
        	statesList.append(val)

for val in statesArr:
	if(re.search('^k.*s$',val,re.I)):
		statesList.append(val)

for val in statesArr:
	if(re.search('^M.*s$',val)):
		statesList.append(val)

for val in statesArr:
	if(re.search('a$',val)):
		statesList.append(val)
for val in statesList:
	print(val)
print(states)
