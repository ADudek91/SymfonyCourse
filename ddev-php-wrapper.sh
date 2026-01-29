#!/bin/bash
# Wrapper script to use PHP from DDEV container in Cursor/VS Code
# This script should be used as PHP executable path in IDE settings

# Get the project directory (where this script is located)
PROJECT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"

# Execute PHP command in DDEV container
cd "$PROJECT_DIR" && ddev exec php "$@"
