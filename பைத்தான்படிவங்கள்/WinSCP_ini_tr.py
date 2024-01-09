import pota

file = open('./வெறுமை/WinSCP-TA-6.2.2.ini', 'r')
file2 = open('./வெறுமை/WinSCP-TA-6.2.2-1.ini', 'w')
try:
    for line in file.readlines():
        if line.strip() == '':
            file2.write(line)
        elif line.strip()[0] == ';':
            com = line[1:].strip()
            if com[0] == '"':
                en = com
            file2.write(line)
        elif line.strip()[0] == '[':
            file2.write(line)
        else:
            k = line.split('=')
            if k[1].strip() == "<translate>":
                t, _ = pota.பொருள்_பெறு(en, 0)
                data = k[0] + '=' + t + "\n"
                print(line)
                print(data)
                file2.write(data)
            else:
                file2.write(line)
except Exception as e:
    print(e)
file.close()
file2.close()
