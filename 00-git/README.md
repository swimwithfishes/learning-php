# Learning Git

### Essential Commands

---

#### Git Basics

`git init <directory>`

Create an empty Git repo in specified directory (local machine)

`git clone <repo>`

Clone repo located at `<repo>` onto local machine. Original repo can be located on the local filesystem or on a remote machine via HTTP or SSH

`git config user.name <name>`

Define author name to be used for all commits in current repo. Devs commonly use `--global` flag to set config options for current user.

`git add <directory>`

Stage all changes in `<directory>` for the next commit. Replace `<directory>` with a `<file>` to stage a specific file.

`git commit -m "<message>"`

Commit the staged snapshot, but instead of launching a text editor, use `<message>` as the commit message.

`git status`

List which files are stage, unstaged and untracked.

`git log`

Display the entire commit history using the default format.

`git diff`

Show unstaged changes between your index and working directory.

#### Undoing Changes

`git revert <commit>`

Create new commit that undoes all the changes made in `<commit>`, then apply it to the current branch.

`git reset <file>`

Remove `<file>` from the staging area, but leave the working directory unchanged. This unstages a file without overwriting any changes.

`git clean -n`

Show which files would be removed from working directory. Use the `-f` flag in place of the `-n` flag to execute the clean.

#### Branches

`git branch`

List all of the branches in your repo. Add a `<branch>` argument to create a new branch with the name `<branch>`

`git checkout -b <branch>`

Create and check out a new branch named `<branch>`. Drop the `-b` flag to checkout an existing branch.

`git merge <branch>`

Merge `<branch>` into the current branch.

#### Remote Repositories

`git remote add <name> <url>`

Create a new connection to a remote repo. After adding a remote, you can use `<name>` as a shortcut for `<url>` in other commands.

`git fetch <remote> <branch>`

Fetches a specific `<branch>` from the repo. Leave off `<branch>` to fetch all remote refs.

`git pull <remote>`

Fetch the specified remote's copy of the current branch and immediately merge it into the local copy in your local machine.

`git push <remote> <branch>`

Push the branch to `<remote>`, along with necessary commits and objects. Creates named branch in the remote repo if it doesn't exist.
