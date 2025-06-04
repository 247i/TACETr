pip install xlifflib



import xlifflib

def read_xliff_file(file_path):
    xliff = xlifflib.Xliff()
    xliff.load(file_path)
    return xliff

def write_xliff_file(xliff, file_path):
    xliff.save(file_path)

# Example usage
input_file_path = "input.xliff"
output_file_path = "output.xliff"

# Read the XLIFF file
xliff = read_xliff_file(input_file_path)

# Perform your translation operations here
# ...

# Write the XLIFF file
write_xliff_file(xliff, output_file_path)



import xlifflib

def read_xliff_file(file_path):
    xliff = xlifflib.Xliff()
    xliff.load(file_path)
    return xliff

def get_translations(xliff):
    for transmission in xliff.transmissions:
        for unit in transmission.units:
            print(unit.id, unit.text)

# Example usage
input_file_path = "input.xliff"

# Read the XLIFF file
xliff = read_xliff_file(input_file_path)

# Access each translation unit
get_translations(xliff)
