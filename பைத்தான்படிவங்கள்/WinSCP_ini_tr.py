import pota

file = open('./காலி/WinSCP-TA.ini','r')
file2 = open('./காலி/WinSCP-TA1.ini','w')
t = ''
for line in file.readlines():
    if line.strip() == '':
        file2.write(line)
    elif line.strip()[0] == ';':
        t , _ = pota.பொருள்_பெறு(line[1:],0)
        file2.write(line)
    elif line.strip()[0] == '[':
        file2.write(line)
    else:
        k = line.split('=')
        print(k)
        data = k[0] + '=' + t
        print(data)
        file2.write(data)
file.close()
file2.close()
