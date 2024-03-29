<table class="table">
    <thead>
        <tr>
            <th>Basename</th>
            <th>Modified</th>
            <th>Real Path</th>
            <th>Permission</th>
            <th>Random Name</th>
            <th>Size</th>
            <th>Mime</th>
            <th>Extension</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $file->getBasename() ?></td>
            <td><?= $file->getMTime() ?></td>
            <td><?= $file->getRealPath() ?></td>
            <td><?= $file->getPerms() ?></td>
            <td><?= $file->getRandomName() ?></td>
            <td><?= $file->getSizeByUnit('kb');?></td>
            <td><?= $file->getMimeType() ?></td>
            <td><?= $file->guessExtension() ?></td>
        </tr>
    </tbody>
</table>