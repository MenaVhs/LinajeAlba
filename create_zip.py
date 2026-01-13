
import zipfile
import os

def zip_theme(source_dir, output_filename):
    theme_name = os.path.basename(source_dir)
    with zipfile.ZipFile(output_filename, 'w', zipfile.ZIP_DEFLATED) as zipf:
        for root, dirs, files in os.walk(source_dir):
            for file in files:
                file_path = os.path.join(root, file)
                # Create a relative path so the zip structure starts with the theme folder name
                # e.g. source_dir is '.../linaje-alba-theme'
                # we want files to be stored as 'linaje-alba-theme/style.css'
                
                # Calculate relative path from the *parent* of source_dir
                parent_dir = os.path.dirname(source_dir)
                rel_path = os.path.relpath(file_path, parent_dir)
                
                print(f"Adding {rel_path}")
                zipf.write(file_path, rel_path)

source = r"c:\Users\mena_\Proyectos\LinajeAlba\linaje-alba-theme"
destination = r"c:\Users\mena_\Proyectos\LinajeAlba\linaje-alba-theme.zip"

print(f"Zipping {source} to {destination}")
zip_theme(source, destination)
print("Done.")
