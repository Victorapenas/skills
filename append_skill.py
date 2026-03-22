import os
import glob

append_text = """

## Ao Concluir Esta Etapa
Atualize o contexto-projeto.md:
- Marque esta etapa como concluída com a data
- Registre decisões tomadas na seção "Decisões Tomadas"
- Informe a próxima etapa no campo "Próxima etapa"
"""

base_dir = r"C:\skills"
# Pegar todas as pastas principais ignorando as subpastas da lixeira "lp_factory_v2_melhorias"
for path in glob.glob(os.path.join(base_dir, "*", "SKILL.md")):
    if "lp_factory_v2_melhorias" not in path:
        # Check if text is already inside to prevent duplicate append
        with open(path, "r", encoding="utf-8") as f:
            content = f.read()
        if "Atualize o contexto-projeto.md" not in content:
            with open(path, "a", encoding="utf-8") as f:
                f.write(append_text)
                print(f"Appended to {path}")
