# Example for Case Sensitivity

## This Version (main) does not work - checkout "working on servers with case sensitivity" for a working version.

Error in Console:
`Object { success: false, message: "The file at mod_niceextension/helper.php does not exist.", messages: null, data: null }
`

it falls back and checks for the default (old) helper because the new one has not been found.